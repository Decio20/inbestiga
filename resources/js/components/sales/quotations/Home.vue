<template>
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row invoice-add">
      <!-- Invoice Add-->
      <div class="col-lg-9 col-12 mb-lg-0 mb-4">
        <div class="card invoice-preview-card">
          <div class="card-body">
            <div class="row p-sm-3 p-0">
              <div class="col-md-6 mb-md-0 mb-4">
                <div class="d-flex svg-illustration mb-4 gap-2">
                  <span class="app-brand-logo demo">
                    <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <defs>
                        <path
                          d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                          id="path-1"></path>
                        <path
                          d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                          id="path-3"></path>
                        <path
                          d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                          id="path-4"></path>
                        <path
                          d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                          id="path-5"></path>
                      </defs>
                      <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                          <g id="Icon" transform="translate(27.000000, 15.000000)">
                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                              <mask id="mask-2" fill="white">
                                <use xlink:href="#path-1"></use>
                              </mask>
                              <use fill="#696cff" xlink:href="#path-1"></use>
                              <g id="Path-3" mask="url(#mask-2)">
                                <use fill="#696cff" xlink:href="#path-3"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                              </g>
                              <g id="Path-4" mask="url(#mask-2)">
                                <use fill="#696cff" xlink:href="#path-4"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                              </g>
                            </g>
                            <g id="Triangle"
                              transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                              <use fill="#696cff" xlink:href="#path-5"></use>
                              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Inbestiga</span>
                </div>
                <p class="mb-1">Prolongación Cuzco 921 – Huancayo.</p>
                <p class="mb-1">Calle Elías Aguirre 180 Piso 03 – Miraflores.</p>
                <p class="mb-0">991045555, 947202059</p>
              </div>
              <div class="col-md-6">
                <dl class="row mb-2">
                  <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                    <span class="h4 text-capitalize mb-0 text-nowrap">Cotización</span>
                  </dt>
                  <dd class="col-sm-6 d-flex justify-content-md-end">
                    <div class="w-px-150">
                      <input v-if="idQuotation" type="text" class="form-control" v-model="idQuotation" disabled>
                    </div>
                  </dd>
                  <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                    <span class="fw-normal">Fecha:</span>
                  </dt>
                  <dd class="col-sm-6 d-flex justify-content-md-end">
                    <div class="w-px-150">
                      <input type="date" class="form-control date-picker flatpickr-input" v-model="date">
                    </div>
                  </dd>
                  <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                    <span class="fw-normal">Fecha de validez:</span>
                  </dt>
                  <dd class="col-sm-6 d-flex justify-content-md-end">
                    <div class="w-px-150">
                      <input type="date" class="form-control date-picker flatpickr-input" v-model="dateValidate">
                    </div>
                  </dd>
                </dl>
              </div>
            </div>
            <hr class="my-4 mx-n4">
            <div class="row p-sm-3 p-0">
              <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-4">
                <h6 class="pb-2">Cotización para:</h6>
                <table v-if="customer">
                  <tbody>
                    <tr>
                      <td class="pe-3">Nombre:</td>
                      <td>{{ customer.name }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Universidad:</td>
                      <td>{{ customer.university }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Carrera:</td>
                      <td>{{ customer.career }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Celular:</td>
                      <td>{{ customer.cell }}</td>
                    </tr>
                    <tr>
                      <td class="pe-3">Email:</td>
                      <td>{{ customer.email }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-sm-7"></div>
            </div>
            <hr class="mx-n4">
            <form class="source-item py-sm-3">
              <div class="mb-3" data-repeater-list="group-a">
                <template v-for="(detail, index) in details">
                  <Detail :detail="detail" :newProducts="newProducts" :index="index"
                    @removeSuggestedCart="removeSuggestedCart" />
                </template>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="button" class="btn btn-primary" data-repeater-create="" @click="addDetail">Agregar
                    Detalle</button>
                </div>
              </div>
            </form>
            <hr class="my-4 mx-n4">
            <div class="row py-sm-3">
              <div class="col-md-6 mb-md-0 mb-3">
                <div class="d-flex align-items-center mb-3">
                  <label for="salesperson" class="form-label me-5 fw-semibold">Tiempo de Ejecución<span
                      class="text-danger">*</span>:</label>
                  <input type="text" class="form-control" v-model="term">
                </div>
                <div class="d-flex align-items-center mb-3">
                  <label for="salesperson" class="form-label me-5 fw-semibold">Cupón de descuento:</label>
                  <input type="text" class="form-control" v-model="coupon" @keyup.enter="autoDiscount">
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-end">
                <div class="invoice-calculations">
                  <div class="d-flex justify-content-between mb-2">
                    <span class="w-px-100">Subtotal:</span>
                    <span class="fw-semibold">S./ {{ totalProducts }}</span>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <span class="w-px-100">Descuento:</span>
                    <span class="fw-semibold">S./ {{ discount }}</span>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between">
                    <span class="w-px-100">Total:</span>
                    <span class="fw-semibold">S./ {{ finalPrice }}</span>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4 mx-n4">
            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="note" class="form-label fw-semibold">Nota:</label>
                  <textarea class="form-control" rows="2" id="note"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Invoice Add-->

      <!-- Invoice Actions -->
      <div class="col-lg-3 col-12 invoice-actions">
        <div class="card bg-success text-white mb-3">
          <div class="card-header">
            Necesidades del cliente
          </div>
          <div class="card-body">
            {{ customer.needs }}
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <button @click="insertQuotation" class="btn btn-primary d-grid w-100 mb-3">
              <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                  class="bx bx-paper-plane bx-xs me-1"></i>Generar</span>
            </button>
            <router-link v-if="idQuotation != 0" :to="{ name: 'quotation-file', params: { id: idQuotation } }"
              target="_blank" class="btn btn-primary d-grid w-100 mb-3" disabled>
              <span class="d-flex align-items-center justify-content-center text-nowrap">
                <i class="bx bx-file bx-xs me-1"></i>Cotización
              </span>
            </router-link>
          </div>
        </div>
      </div>
      <!-- /Invoice Actions -->
    </div>
  </div>
</template>
<script>
import moment from 'moment'
import conversor from 'conversor-numero-a-letras-es-ar'
import CustomerCard from './CustomerCard.vue'
import DateCard from './DateCard.vue'
import calcModal from './calcModal.vue'
import InsertDetail from './InsertDetail.vue'
import SearchProduct from './searchProduct.vue'
import ProductModal from './ProductModal.vue'
import { userStore } from '../../../stores/UserStore'
import Detail from './Detail.vue'
import Payments from './Payments.vue'

export default {
  setup() {
    const store = userStore()
    return {
      store
    }
  },
  components: { calcModal, InsertDetail, CustomerCard, DateCard, SearchProduct, ProductModal, Detail, Payments },
  data() {
    return {
      typeDocument: 1,
      customer: {},
      date: '',
      dateValidate: '',
      newProductsByType: [],
      newProductsByName: [],
      details: [],
      newProduct: {},
      discount: 0,
      note: '',
      idQuotation: 0,
      idContract: 0,
      fixed_products: [],
      selected_product: {},
      newProducts: [],
      term: '',
      mode: 0,
      level: 0,
      search: '',
      coupon: '',
      recentsCode: [],
      fees: [],
      dni: '',
      address: '',
      finalDelivery: '',
      observations: ''
    }
  },
  methods: {
    saveDni() {
      const fd = new FormData()
      fd.append('id_customer', this.customer.id)
      fd.append('dni', this.dni)
      fd.append('address', this.address)
      axios.post('/api/updateDniCustomer', fd)
        .then((res) => {
          this.getUser()
        })
        .catch((err) => {
          console.error(err)
        })
    },
    autoDiscount() {

      var codeFound = this.recentsCode.find(code => code.code == this.coupon)

      if (codeFound && this.discount == 0) {
        this.$swal('Se ha desbloqueado el descuento')
        this.discount = ((this.totalProducts * codeFound.percent) / 100).toFixed(2)
      } else {
        this.$swal('Codigo incorrecto o duplicado')
        this.discount = 0
      }
    },
    redirect() {
      /*   if(){
          this.$router.push({name:'home-contracts', params:{ idUser: this.customer.id }})
        }else{
          this.$router.push({name:'home-orders', params:{ idUser: this.customer.id }})
        } */

    },
    addFee(fees) {
      this.fees = []
      this.fees = fees
    },
    addPrice(detail, newProduct) {
      if (detail.mode == 2) {
        alert('nani')
      } else {
        detail.price = newProduct.newPriceSelected.price
        detail.new_product.name = newProduct.name
        detail.new_product_id = newProduct.id
        this.newProductsByName = []
      }
    },
    addDetail() {
      this.details.push({ type: 1, level: '', title: '', mode: '', price: '', new_product: { name: '' }, new_product_id: '' })
    },
    selectMode(e) {
      this.newProductsByType = this.newProducts.filter(product => product.type == e.target.value)
      console.log(this.newProductsByType)
    },
    searchNewProduct(e) {

      if (e.target.value != '') {
        this.newProductsByName = this.newProductsByType.filter(product => product.name.toLowerCase().includes(e.target.value))
        this.newProductsByName.forEach((product) => {
          product.newPriceSelected = product.newprices.find(price => price.level == this.level)
        })
      } else {
        this.newProductsByName = []
      }
    },
    getUser() {
      axios.get('/api/getCustomer/' + this.$route.params.idUser)
        .then((res) => {
          this.customer = res.data
          if (this.customer.quotations[0]) {
            this.idQuotation = this.customer.quotations[0].id
            if (this.customer.quotations[0].contract != null) {
              this.idContract = this.customer.quotations[0].contract
              this.fees = this.customer.quotations[0].contract.fees
            }
            this.discount = this.customer.quotations[0].discount
            this.date = this.customer.quotations[0].date
            this.dateValidate = this.customer.quotations[0].expiration_date
            this.term = this.customer.quotations[0].term
            this.note = this.customer.quotations[0].note
            this.customer.quotations[0].details.forEach(detail => {
              this.details.push(detail)
            })
          }
        })
        .catch((err) => {
          console.log(err)
        })
    },
    getAllNewProducts() {
      axios.get('/api/getAllNewProducts')
        .then((res) => {
          this.newProducts = res.data
        })
        .catch((err) => {
          console.error(err)
        })
    },
    filterNewProducts(type) {
      console.log('modo', type)
      this.newProductsByType = this.newProducts.filter(product => product.type == type)
    },
    callProductModal(newProduct) {
      this.newProduct = newProduct
      $('#productModal').modal('show')
    },
    removeSuggestedCart(index) {
      this.details.splice(index, 1)
    },
    generateFees(fees) {
      this.fees = fees
    },
    insertQuotation() {
      if (this.typeDocument == 1) {
        if (this.customer.quotations[0]) {
          this.updateQuotation(this.customer.quotations[0].id)
        } else {
          this.createQuotation()
        }
      }
    },
    updateQuotation(quotationId) {
      const fd = new FormData()

      fd.append('quotation_id', quotationId)
      fd.append('date', this.date)
      fd.append('expirationDay', this.dateValidate)
      fd.append('amount', this.totalProducts - this.discount)
      fd.append('discount', this.discount)
      fd.append('term', this.term)
      fd.append('products', JSON.stringify(this.details))
      fd.append('emisor_id', this.store.authUser.id)

      axios.post('/api/updateQuotation', fd)
        .then((res) => {
          this.$swal('Cotización actualizada correctamente')
          this.idQuotation = res.data.id
        })
        .catch((err) => {
          console.log(err)
        })
    },
    createQuotation() {
      if (this.date == '' || this.dateValidate == '') {
        this.$swal('Porfavor no deje en blanco los campos de fecha y fecha de validez')
      } else {
        const fd = new FormData()

        fd.append('user_id', this.store.authUser.id)
        fd.append('customer_id', this.customer.id)
        fd.append('date', this.date)
        fd.append('expirationDay', this.dateValidate)
        fd.append('amount', (this.totalProducts - this.discount).toFixed(2))
        fd.append('discount', this.discount)
        fd.append('term', this.term)
        fd.append('products', JSON.stringify(this.details))
        fd.append('emisor_id', this.store.authUser.id)

        axios.post('/api/quotations', fd)
          .then((res) => {
            this.$swal('Cotización insertada correctamente')
            this.idQuotation = res.data.id
          })
          .catch((err) => {
            console.log(err)
          })
      }
    },
    addCartModal(product) {
      this.car_products.push(JSON.stringify(product))
      this.filtered_products = []
      this.searchProduct = ''
    },
    addSugestCartModal(product) {
      this.carSugestedProducts.push(JSON.stringify(product))
      this.filtered_products_sugested = []
      this.searchSugestedProduct = ''
    },
    getNewProducts() {
      axios.get('/api/getNewProductsById/' + this.$route.params.idUser)
        .then((res) => {
          this.details = res.data
        })
        .catch((err) => {
          console.log(err)
        })
    },
    insertCarProducts(newProduct) {
      console.log(newProduct)
      var newProd = { 'id': newProduct.id, 'name': newProduct.name, 'type': newProduct.typeDetail, 'price': newProduct.priceFinal, 'new_product_id': newProduct.id, 'level': newProduct.level }
      this.details.push(newProd)
    },
    getAllPromotionCodes() {
      axios.get('/api/getAllPromotionsCode')
        .then((res) => {
          this.recentsCode = res.data
        })
        .catch((err) => {
          console.error(err)
        })
    }
  },
  mounted() {
    this.getAllPromotionCodes()
    this.getUser()
    this.getAllNewProducts()
  },
  computed: {
    finalPrice() {
      return (this.totalProducts - this.discount).toFixed(2)
    },
    totalProducts() {
      var total = 0
      this.details.forEach((product) => {
        if (product.type == 1) {
          total += parseFloat(product.price)
        }

      })
      return (total).toFixed(2)
    },
    ableToPayments() {

      var detailFound = this.details.find(detail => detail.mode == 2)

      if (detailFound) {
        if (this.typeDocument == 2 || this.typeDocument == 3) {
          return true
        } else {
          return false
        }
      } else {
        return false
      }
    }
  }
}
</script>