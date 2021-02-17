<template>
  <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);">
    <div class="p-0 h-100">
      <div class="" style="background-color: white; min-height: 682px;">
        <simple-header v-if="$parent.language === 'en'" :title="category.category"></simple-header>
        <simple-header v-else :title="category.category_ar"></simple-header>
        <div style="height: auto; margin-top: 1px; background-color: white; border-bottom: 1px solid rgb(212, 213, 212);">
          <div class="row m-0 w-100" style="border-top: 1px solid rgb(222, 226, 230);">
            <div class="col-12">
              <div class="scrollable-div">
                <div class="row border-bottom bg-white disable-scroll-bar" style="min-height: 65px; direction: ltr;">
                  <div class="col-4 bg-white m-auto">
                    <button v-on:click="$router.push('/areas')" class="MuiButtonBase-root MuiButton-root" tabindex="0" type="button" style="line-height: 3; width: 80px; max-height: 40px; text-transform: none; font-weight: bold; box-shadow: none; border-radius: 3px; padding: 0px;">
                      <span class="MuiButton-label" v-if="$parent.selectedArea === null">Choose Delivery Area</span>
                      <span class="MuiButton-label" v-else>{{$parent.language === 'ar' ? $parent.selectedArea.name_ar : $parent.selectedArea.name}}</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <form class="MuiPaper-root jss21 MuiPaper-elevation1 MuiPaper-rounded" style="direction: ltr;">
            <div class="MuiInputBase-root jss22">
              <input v-if="$parent.language === 'en'" v-model="search" placeholder="Search for products" type="text" aria-label="Search for products" class="MuiInputBase-input" value="">
              <input v-else v-model="search" placeholder="ابحث عن المنتجات" type="text" aria-label="Search for products" class="MuiInputBase-input" value="" dir="rtl">
            </div>
            <button class="MuiButtonBase-root MuiIconButton-root jss23" tabindex="0" type="submit" aria-label="search">
              <span class="MuiIconButton-label">
                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </span>
              <span class="MuiTouchRipple-root"></span>
            </button>
          </form>
        </div>
        <div class="free-space-80" style="background-color: white;"></div>
        <div class="row mx-auto m-0" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="background-color: white; width: 98%;">
          <div v-for="product in filteredProducts" class="col-6 mb-5" style="width: 50%; min-height: 240px; padding-right: 8px; padding-left: 8px;">
            <router-link :to="{name: 'ProductDetails', params: { id: product.id }}" class="nav-item nav-link">
              <a href="javascript:void(0)" style="color: black;">
                <div :style="{'background': 'url(' + product.media[0].path + ') center center / contain no-repeat', 'background-size': '100px', 'border-radius': '7px', 'width': '100%', 'display': 'block', 'cursor': 'pointer', 'min-height': '240px', 'position': 'relative'}"></div>
                <div>
                  <p class="mt-2 mb-0 cut-text-one-line text-left pl-1" style="font-size: 14px; font-weight: bold; height: 20px;">
                    {{ $parent.language === 'ar' ? product.name_ar : product.name }}
                  </p>
                  <p class="cut-text-two-lines-grid-view text-left pl-1" style="font-size: 14px; color: rgb(51, 51, 51); margin-top: 3px; margin-bottom: 3px; height: 38px;">
                    {{ $parent.language === 'ar' ? product.description_ar : product.description}}
                  </p>
                  <p class="mb-4 text-right pr-1 " :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="font-size: 14px;">

                  <p v-if="!product.addons_head.length > 0 " class="text-right m-0" style="font-weight: bold;">
                    {{ product.price }} KWD
                  </p>
                  <p v-else-if="$parent.language === 'en'" class="text-right m-0" style="font-weight: bold;">
                  Price on selection
                </p>
                  <p v-else-if="$parent.language === 'ar'" class="text-right m-0" style="font-weight: bold;">
                    السعر حسب الاختيار
                  </p>


                  <div class="mt-2  float-right">
                    <button v-on:click="addToCart(product)" class="MuiButtonBase-root MuiButton-root MuiButton-outlined mx-auto MuiButton-outlinedPrimary MuiButton-outlinedSizeSmall MuiButton-sizeSmall MuiButton-disableElevation" tabindex="0" type="button" style="height: 30px; width: 80px; font-weight: bold; border: 1px solid; text-transform: none; font-size: 14px;">
                      <span class="MuiButton-label">
                        <span class="MuiButton-startIcon MuiButton-iconSizeSmall">
                          <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                          </svg>
                        </span>
                        {{ $parent.language === 'en' ? 'Add' : 'أضف'}}
                      </span>
                    </button>
                  </div>
                </div>
              </a>
            </router-link>
          </div>
        </div>
        <div class="free-space-80" style="background-color: white;"></div>
        <div v-if="$parent.quantity > 0" class="action-button-english" style="background-color: white; padding-bottom: 8px; margin-bottom: 0; height: 60px; z-index: 4;">
          <button v-on:click="$router.push('/order-review')" class="MuiButtonBase-root MuiButton-root MuiButton-contained mb-1  ml-1 mx-auto MuiButton-containedPrimary" tabindex="0" type="button" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" :style="{'width': '97%', 'height': '100%', 'box-shadow': 'none', 'text-transform': 'none', 'background': $parent.settings.button_color}">
            <span class="MuiButton-label">
              <span v-if="$parent.language === 'en'" class="px-1" style="position: absolute; left: 10px; top: 6px; line-height: 34px; background: rgba(0, 0, 0, 0.3); border-radius: 7px; min-width: 32px; height: 32px; font-size: 1rem;">{{ $parent.quantity }}</span>
              <span v-if="$parent.language === 'ar'" style="position: absolute; right: 10px; top: 6px; line-height: 34px; border-radius: 7px; min-width: 32px; height: 32px; font-size: 1rem;">{{ $parent.price }}</span>
              <span v-if="$parent.language === 'en'" style="font-size: 1rem;">Review Order</span>
              <span v-else style="font-size: 1rem;">مراجعة الطلب</span>
              <span v-if="$parent.language === 'ar'" class="px-1" style="position: absolute; left: 10px; top: 6px; line-height: 34px; background: rgba(0, 0, 0, 0.3); border-radius: 7px; min-width: 32px; height: 32px; font-size: 1rem;">{{ $parent.quantity }}</span>
              <span v-if="$parent.language === 'en'" style="position: absolute; right: 10px; top: 6px; line-height: 34px; border-radius: 7px; min-width: 32px; height: 32px; font-size: 1rem;">{{ $parent.price }}</span>
            </span>
            <span class="MuiTouchRipple-root"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";

export default {
  name: "detailComponent",
  data() {
    return {
      products: [],
      category: '',
      selectedVariants: '',
      instruction: '',
      quantity: '',
      search: '',
    }
  },
  created() {},
  mounted() {
    this.$parent.loading = true
    this.getProducts()
  },
  computed:{
    filteredProducts:function(){
      var self=this;
      return self.products.filter(function(val){
        return val.name.toLowerCase().includes(self.search.toLowerCase());
      })
    }
  },
  methods: {
    getProducts() {
      let self = this
      let id = self.$route.params.id
      axios.post(APP_URL+'/api/getProducts', {
        'id': id
      })
        .then(response => {
          if (response.data.type === 'success') {
            self.products = response.data.products
            self.category = response.data.category
            self.$parent.loading = false
            response.data.products.forEach(function (product) {
              console.log(product.addons_head.length)
            })
          }
        })
        .catch(e => {
          this.errors.push(e)
        })
    },
    addToCart(product) {
      let self = this
      let totalPrice = 0.00
      totalPrice += parseInt(self.product.price)

      if (this.$parent.selectedArea === null) {
        this.$router.push('/areas')
        Vue.toasted.error('Choose Area To Deliver First');
        return
      }
      if (this.product.manage_stock) {
        if (this.product.stock < this.quantity) {
          Vue.toasted.error('Out of stock');
        }
        else {
          this.storeCart(product)
        }
      }
      else {
        this.storeCart(product)
      }

    },
    storeCart(product) {
      let self = this
      axios.post(APP_URL+'/store-cart', {
        'product': product,
        'addons': self.selectedAddons,
        'variants': self.selectedVariants,
        'instruction': self.instruction,
        'quantity': self.quantity,
      })
          .then(response => {
            if (response.data.type === 'success') {
              self.$parent.price = response.data.totalPrice
              self.getCartItems()
            }
          })
          .catch(e => {
            this.errors.push(e)
          })

    },
  },
}
</script>

<style scoped>

</style>