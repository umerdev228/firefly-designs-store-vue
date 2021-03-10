<template>
  <div>
    <div ref="loader" v-if="loading" class="loading-overlay">
      <span class="fas fa-spinner fa-3x fa-spin"></span>
    </div>
    <div id="root">
      <div class="App container-fluid h-100 english-font grayBackground" id="main">
        <div class="row" style="overflow-y: scroll;">
          <div class="col-lg-5 col-md-5 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);">
            <router-view></router-view>
          </div>
          <banner-side-component></banner-side-component>
        </div>
      </div>
    </div>

  </div>

</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
  components: { VueSlickCarousel },
  name: "App",
  mounted() {
    this.language = localStorage.getItem('lang') ?? 'en'
    this.loading = false
    this.getSelectedArea()
    this.getAllCart()
    this.getSiteSetting()
  },
  data() {
    return {
      backgroundImages: [],
      cat: 0,
      selectedArea: null,
      loading: true,
      price: 0.00,
      quantity: 0,
      settings: '',
      language: '',
    }
  },
  methods: {
    getSelectedArea() {
      let self = this
      this.selectedArea = JSON.parse(localStorage.getItem('selected-area'))
    },
    getAllCart() {
      let self = this

      axios.get(APP_URL+'/get-all-cart')
          .then(response => {
            if (response.data.type === 'success') {
              self.quantity = response.data.quantity
              self.price = response.data.totalPrice
              self.loading = false
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    },
    getSiteSetting() {
      let self = this
      self.loading = true

      axios.get(APP_URL+'/get-site-setting')
          .then(response => {
            if (response.data.type === 'success') {
              self.settings = response.data.settings
              self.backgroundImages = response.data.images
              console.log(response.data.images)
              console.log(response.data)
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    }
  }
}
</script>

<style>
.loading-overlay {
  display: block;
  background: rgba(255, 255, 255, 0.7);
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
  z-index: 9998;
  align-items: center;
  justify-content: center;
}

.loading-overlay.is-active {
  display: flex;
}

.code {
  font-family: monospace;
  /*   font-size: .9em; */
  color: #dd4a68;
  background-color: rgb(238, 238, 238);
  padding: 0 3px;
}

@-webkit-keyframes rotate {
  /* 100% keyframe for  clockwise.
     use 0% instead for anticlockwise */
  100% {
    -webkit-transform: rotate(360deg);
  }
}
</style>