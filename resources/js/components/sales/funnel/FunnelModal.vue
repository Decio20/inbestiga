<template>
    <div class="modal fade" id="funnelModal" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title w-100" id="exampleModalLabel3">
                <div class="row">
                    <div class="col-6">
                        Información de Lead
                <button v-show="customer.status > 3" @click="callToQuotation(customer)" type="button" class="btn btn-icon btn-success ms-2">
                        <span class="tf-icons bx bx-file"></span>
                </button>
                <button v-show="customer.status > 3" @click="callToOrder(customer)" type="button" class="btn btn-icon btn-info ms-2">
                        <span class="tf-icons bx bx-pen"></span>
                </button>
                <button @click="callModal(customer)" type="button" class="btn btn-icon btn-warning ms-2">
                    <span class="tf-icons bx bx-chat"></span>
                </button>
                <div v-if="customer.status >= 3">
                    <h6 @dblclick="editOwner" v-show="!showOptionOwner"  class="cursor-pointer">Dueño: {{ customer.user?customer.user.name:'Sin asignar' }}</h6>
                    <select v-model="newOwner" v-show="showOptionOwner" @blur="hideOptionOwner" @change="updateOwner" id="smallSelect" class="form-select form-select-sm">
                          <option :value="owner.id" v-for="owner in owners">{{ owner.name }}</option>
                    </select>
                </div>
                    </div>
                    <div class="col-6">
                        <p @dblclick="changeInterest(customer)" v-show="customer.status != 11"><i :class="`bx ${interest[customer.interest]} display-4 cursor-pointer`"></i></p>
                    </div>
                </div>
            </h5>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
            </div>
            <div class="modal-body">
            <div class="row">
                
                <div class="col-12 col-lg-6">
                    <div v-if="customer.quotations && customer.quotations.length == 0 && customer.status > 3" class="alert alert-danger py-1 px-2" role="alert">Este usuario no tiene una cotización hecha en el sistema</div>
                <div class="card shadow-none bg-transparent border border-primary mb-3">
                    <div class="card-body">
                      <h5 class="card-title">{{ customer.name }}  
                    <button type="button" class="btn btn-icon btn-primary ms-2" @click="showModalUpdateData(customer)">
                        <span class="tf-icons bx bx-user"></span>
                    </button>
                    </h5> 
                        <p class="card-text">Celular: {{ customer.cell }}</p>
                        <p class="card-text">Email: {{ customer.email }}</p>
                        <p class="card-text">Universidad: {{ customer.university }}</p>
                        <p class="card-text">Carrera: {{ customer.career }}</p>
                    </div>
                </div>
                </div>
                <div class="col-12 col-lg-6">
                    
                    <div class="card shadow-none bg-transparent border border-warning mb-3" v-if="customer.comunications && customer.comunications.length != 0">
                        <div class="card-body">
                            <h5 class="card-title">Comunicación más reciente</h5>
                                <p class="card-text">Primera gestión: {{ customer.comunications[0].first_management  }}</p>
                                <p class="card-text">Última gestión: {{ customer.comunications[0].last_management  }}</p>
                                <p class="card-text">Siguiente gestión: {{ customer.comunications[0].next_management  }}</p>
                                <p class="card-text">Tipo: {{ typeComunication[customer.comunications[0].type] }}</p>
                                <p class="card-text">Producto Tentativo: {{ customer.comunications[0].product_tentative  }}</p>
                                <p class="card-text">Comentario: {{ customer.comunications[0].comment  }}</p>
                        </div>
                    </div> 
                </div>
            </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" @click="standBy(customer.id)">Stand By</button>
            <button type="button" class="btn btn-primary" @click="updateStatusSpace">Ascender</button>
            </div>
        </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
import {userStore} from '../../../stores/UserStore'

export default {
    setup(){
      const store = userStore()
      return{
        store
      }
    },
    data(){
        return{
            showOptionOwner:false,
            newOwner:1,
            typeComunication:{
                1: 'Llamar',
                2: 'Escribir',
                3: 'Meet'
            },
            interest:{
                null: 'bx-minus-circle',
                1: 'bx-sad text-danger',
                2: 'bx-smile text-info',
                3: 'bx-wink-smile text-success'
            }
        }
    },
    props:{
        customer: Object,
        owners: Array
    },
    methods:{
        changeInterest(customer){
            var customerId = customer.id

            if(customer.interest == null){
                var newInterest = 1
            }else if(customer.interest < 3){
                var newInterest = parseInt(customer.interest) + 1
            }else{
                var newInterest = 1
            }
            
            axios.get('/api/changeInterest/'+customerId+'/'+newInterest)
            .then((res) =>{
                this.$emit('updateInterest', res.data)
            })
            .catch((err) =>{
                console.log(err)
            })
        },
        hideOptionOwner(){
            this.showOptionOwner = false
        },
        updateOwner(){
            var newOwner = this.owners.find(owner => owner.id == this.newOwner)

            const fd = new FormData()
            fd.append('customer_id', this.customer.id)
            fd.append('user_id', this.newOwner)

            axios.post('/api/updateOwner', fd)
            .then((res)=>{
                this.$emit('updateOwner', this.customer, newOwner)
            })
            .catch((err)=>{
                console.error(err)
            })

            this.showOptionOwner = false
        },
        editOwner(){
            this.showOptionOwner = true
        },
        standBy(id){
            axios.get('/api/standByCustomer/'+id)
            .then((res)=>{
                $('#funnelModal').modal('hide')
                this.$emit('getAllCustomers')
            })
            .catch((err)=>{
                console.error(err)
            })
        },
        updateStatusSpace(){    
            var newStatus = parseInt(this.customer.status) + 1
            this.$emit('updateStatusSpace', this.customer.id, newStatus)
        },
        callModal(customer){
            this.$emit('callModal', customer)
        },
        showModalUpdateData(customer){
            this.$emit('showModalUpdateData', customer)
        },
        callToQuotation(customer){
            if(this.store.authUser.id != 22){
                $('#funnelModal').modal('hide')
                this.$router.push({name:'home-quotation', params:{ idUser: customer.id }})
            }else{
                $('#funnelModal').modal('hide')
                this.$swal('Nop')
            }
           
        },
        callToOrder(customer){
            $('#funnelModal').modal('hide')
            if(this.store.authUser.id == 22){
                this.$swal('Nop')
            }else{
                if(customer.quotations[0]){
                if(customer.quotations[0].amount > 1500){
                    this.$router.push({name:'home-contracts', params:{ idUser: customer.id }})
                }else{
                    this.$router.push({name:'home-orders', params:{ idUser: customer.id }})
                }
            }else{
                this.$swal.fire({
                title: 'Qué documento deseas generar?',
                showDenyButton: true,
                confirmButtonText: 'Contrato',
                denyButtonText: `Orden`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    this.$router.push({name:'home-contracts', params:{ idUser: customer.id }})
                } else if (result.isDenied) {
                    this.$router.push({name:'home-orders', params:{ idUser: customer.id }})
                }
                })
            }
            }
        }
    }
}
</script>
