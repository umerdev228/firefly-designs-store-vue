<template>

  <div class="col-lg-7 col-md-7 h-100 d-md-none d-sm-none d-xs-none d-none d-lg-block d-md-block p-0" style="background-color: gray; overflow-y: hidden; position: fixed; left: 41.64vw; object-fit: fill;">
    <div>
      <div>

        <button v-on:click="$router.push('/order-review')" class="MuiButtonBase-root MuiButton-root MuiButton-contained menuButtonLargeScreenEnglish header-button-cricle scale-up-center MuiButton-containedSizeSmall MuiButton-sizeSmall" tabindex="0" type="button" style="max-width: 27px; min-height: 30px; z-index: 3; position: fixed; top: 13px; display: none;">
          <span class="MuiButton-label">
            <svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
              <g>
                <g>
                  <path d="M462.964,462.936l-24.546-272.01C436.296,167.594,417.03,150,393.603,150H361v-45C361,47.103,313.897,0,256,0 c-57.897,0-105,47.103-105,105v45h-32.604c-23.427,0-42.693,17.594-44.816,40.936l-24.544,271.99 C46.641,489.255,67.416,512,93.85,512h324.299C444.571,512,465.359,489.26,462.964,462.936z M346,240c8.271,0,15,6.729,15,15 s-6.729,15-15,15s-15-6.729-15-15S337.728,240,346,240z M181,105c0-41.355,33.645-75,75-75s75,33.645,75,75v45H181V105z M166,240 c8.271,0,15,6.729,15,15s-6.729,15-15,15s-15-6.729-15-15S157.728,240,166,240z M103.458,193.642 c0.707-7.777,7.13-13.642,14.938-13.642H151v32.58c-17.459,6.192-30,22.865-30,42.42c0,24.813,20.187,45,45,45s45-20.187,45-45 c0-19.555-12.541-36.228-30-42.42V180h150v32.58c-17.459,6.192-30,22.865-30,42.42c0,24.813,20.187,45,45,45s45-20.187,45-45 c0-19.555-12.541-36.228-30-42.42V180h32.604c7.809,0,14.231,5.865,14.938,13.632L429.148,422H82.851L103.458,193.642z  M418.149,482H93.85c-8.815,0-15.74-7.537-14.937-16.368L80.144,452h351.712l1.231,13.642 C433.888,474.446,426.977,482,418.149,482z"></path>
                </g>
              </g>
            </svg>
          </span>
          <span class="MuiTouchRipple-root"></span>
        </button>
        <button v-on:click="$router.push('/search')" class="MuiButtonBase-root MuiButton-root MuiButton-contained SearchButtonLargeScreenEnglish header-button-cricle scale-up-center MuiButton-containedSizeSmall MuiButton-sizeSmall" tabindex="0" type="button" id="search_button" style="max-width: 32px; min-height: 30px; z-index: 3; position: fixed; top: 13px; right: 30px; display: none;">
          <span class="MuiButton-label">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: black;">
              <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
            </svg>
          </span>
          <span class="MuiTouchRipple-root"></span>
        </button>
        <button v-on:click="$router.push('/order/track')" class="MuiButtonBase-root MuiButton-root MuiButton-contained historyButtonLargeScreenEnglish header-button-cricle scale-up-center MuiButton-containedSizeSmall MuiButton-sizeSmall" tabindex="0" type="button" style="max-width: 27px; min-height: 30px; z-index: 3; position: fixed; top: 13px; display: none;">
          <span class="MuiButton-label">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"></path>
            </svg>
          </span>
          <span class="MuiTouchRipple-root"></span>
        </button>
        <button v-if="$parent.language === 'en'" v-on:click="changeLanguage('ar')" class="MuiButtonBase-root MuiButton-root MuiButton-contained languageButtonLargeScreenEnglish header-button-cricle scale-up-center" tabindex="0" type="button" style="padding: 0; border-radius: 20px; z-index: 3; position: fixed; top: 13px; right: 30px; display: none; max-width: 32px;">
          <span class="MuiButton-label">ع</span>
          <span class="MuiTouchRipple-root"></span>
        </button>
        <button v-if="$parent.language === 'ar'" v-on:click="changeLanguage('en')" class="MuiButtonBase-root MuiButton-root MuiButton-contained languageButtonLargeScreenEnglish header-button-cricle scale-up-center" tabindex="0" type="button" style="padding: 0; border-radius: 20px; z-index: 3; position: fixed; top: 13px; right: 30px; display: none; max-width: 32px;">
          <span class="MuiButton-label">EN</span>
          <span class="MuiTouchRipple-root"></span>
        </button>

      </div>
      <VueSlickCarousel :arrows="false" :dots="true" v-if="backgroundImages.length > 0" >
        <img  v-for="image in backgroundImages" :src="image.path" alt="">
      </VueSlickCarousel>
<!--      <div v-for="image in backgroundImages" class="changeToFixedBackground m-0 p-0"-->
<!--           :style="{'height': '100%', 'width': '100%', 'background': 'url('+image.path+') center center / cover no-repeat', 'position': 'absolute'}"></div>-->

    </div>
  </div>

</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'


export default {
  components: { VueSlickCarousel },
  name: "bannerSideComponent",
  data(){
    return {
      backgroundImages: []
    }
  },
  created() {
    this.getBackgroundImageSlider();
    if (this.$parent.backgroundImages.length > 0) {

      console.log(this.$parent.backgroundImages)
    }
  },
  methods: {
    changeLanguage(lang) {
      localStorage.setItem('lang', lang)
      this.$parent.language = lang
    },
    getBackgroundImageSlider() {
      let self = this
      self.loading = true

      axios.get(APP_URL+'/get-slider-images')
          .then(response => {
            if (response.data.type === 'success') {
              self.backgroundImages = response.data.images
              console.log(response.data.images)
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    }
  }
}
</script>

<style scoped>

</style>