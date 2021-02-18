<template>
  <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);"><div class="p-0 h-100">
    <div class="noselect" style="background: white; min-height: 524px;">
      <simple-header v-if="$parent.language === 'en'" title="Shopping Cart"></simple-header>
      <simple-header v-else title="عربة التسوق"></simple-header>
      <div class="free-space-50"></div>
      <div>
        <ul v-if="totalQuantity > 0" class="MuiList-root MuiList-padding">
          <li v-for="product in cart" class="MuiListItem-root MuiListItem-gutters" style="border-bottom: 1px solid rgba(221, 238, 221, 0.933);">
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3">
              <div class="MuiGrid-root text-center MuiGrid-item MuiGrid-grid-xs-4 MuiGrid-grid-sm-3 MuiGrid-grid-lg-2" style="align-self: center;">
                <div style="position: relative;">
                  <img height="70" :src="product.attributes.image" style="border-radius: 5px; min-width: 70px; min-height: 70px; width: 70px; height: 70px;">
                  <div class="MuiGrid-root mx-auto mt-1 MuiGrid-container MuiGrid-align-items-xs-center MuiGrid-justify-xs-space-around" style="width: 82px; background-color: white; height: 30px;">
                    <div v-on:click="productQuantityDecrement(product.id, product.quantity)" class="MuiGrid-root option-quantity-button MuiGrid-item">
                      <svg :style="{'color': $parent.settings.button_color}" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                      </svg>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item">
                      <div class="text-center" style="border: 0.5px solid rgb(222, 222, 222); border-radius: 5px; width: 35px; padding: 1px;">
                        {{ product.quantity }}
                      </div>
                    </div>
                    <div v-on:click="productQuantityIncrement(product.id, product.quantity)" class="MuiGrid-root option-quantity-button MuiGrid-item">
                      <svg :style="{'color': $parent.settings.button_color}" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="MuiGrid-root text-left MuiGrid-item MuiGrid-grid-xs-5 MuiGrid-grid-sm-6 MuiGrid-grid-md-7 MuiGrid-grid-lg-8" style="font-weight: 300;">
                <span style="font-weight: 600;">
                  {{ product.name }}
                </span>
                <div class="ml-2">
                  <p class="text-muted m-0 px-2" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="font-size: 0.95rem;">
                    <span style="font-weight: 600;">
                      Description
                    </span>
                    <span>
                      {{ product.attributes.description }}
                    </span>
                  </p>
                </div>
              </div>
              <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-3 MuiGrid-grid-md-2">
                <div style="position: absolute; bottom: 10px; right: 14px; direction: rtl; text-align: right; font-size: 1rem; width: 100%; white-space: nowrap;">
                  KWD {{ product.price }}
                </div>
                <svg v-on:click="removeCart(product)" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="position: absolute; color: red; width: 20px; right: 15px; top: 10px;">
                  <path d="M14.59 8L12 10.59 9.41 8 8 9.41 10.59 12 8 14.59 9.41 16 12 13.41 14.59 16 16 14.59 13.41 12 16 9.41 14.59 8zM12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                </svg>
              </div>
            </div>
          </li>
        </ul>
        <div v-else class="mt-4">
          <h2 v-if="$parent.language === 'en'" style="font-family: Quicksand;">
          Your Cart is Empty
        </h2>
          <h2 v-else style="font-family: Quicksand;">
            عربة التسوق فارغة
        </h2>
          <svg height="480pt" viewBox="0 0 480 480" width="480pt" style="width: 150px; height: 100%;">
          <path d="m480 72c0 39.765625-32.234375 72-72 72s-72-32.234375-72-72 32.234375-72 72-72 72 32.234375 72 72zm0 0" fill="#bf4653"></path>
          <path d="m272 176h176c17.671875 0 32 14.328125 32 32s-14.328125 32-32 32h-416c-17.671875 0-32-14.328125-32-32s14.328125-32 32-32h176" fill="#bc8f6f"></path>
          <path d="m448 200h-416c-13.425781 0-24.871094 8.28125-29.625 20 4.753906 11.71875 16.199219 20 29.625 20h416c13.425781 0 24.871094-8.28125 29.625-20-4.753906-11.71875-16.199219-20-29.625-20zm0 0" fill="#cb9e78"></path>
          <path d="m240 0c-17.671875 0-32 14.328125-32 32v160c0 17.671875 14.328125 32 32 32s32-14.328125 32-32v-160c0-17.671875-14.328125-32-32-32zm0 0" fill="#52575f"></path>
          <path d="m228 2.375c-11.71875 4.753906-20 16.199219-20 29.625v160c0 13.425781 8.28125 24.871094 20 29.625 11.71875-4.753906 20-16.199219 20-29.625v-160c0-13.425781-8.28125-24.871094-20-29.625zm0 0" fill="#666d77"></path>
          <path d="m448 240v208c0 17.671875-14.328125 32-32 32h-352c-17.671875 0-32-14.328125-32-32v-208" fill="#bf4653"></path>
          <path d="m64 480h350.871094c.664062-2.566406 1.128906-5.222656 1.128906-8v-208h-384v184c0 17.671875 14.328125 32 32 32zm0 0" fill="#dc6068"></path><g fill="#fff">
          <path d="m184 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
          <path d="m104 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
          <path d="m296 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path
          <path d="m376 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
        </g><path d="m360 64h96v16h-96zm0 0" fill="#eebc5a"></path></svg></div>
        <div class="free-space-80" style="background-color: white;"></div>
        <div class="action-button-english" style="background-color: white; padding-bottom: 8px; margin-bottom: 0px; height: 60px; z-index: 4;">
          <button v-on:click="$router.push('/checkout/details')" class="MuiButtonBase-root MuiButton-root MuiButton-contained mb-1  ml-1 mx-auto MuiButton-containedPrimary" tabindex="0" type="button" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" :style="{'width': '97%', 'height': '100%', 'box-shadow': 'none', 'text-transform': 'none', 'background': $parent.settings.button_color}">
            <span class="MuiButton-label">
              <span class="px-1" style="position: absolute; left: 10px; top: 6px; line-height: 34px; background: rgba(0, 0, 0, 0.3); border-radius: 7px; min-width: 32px; height: 32px; font-size: 1rem;">
                {{ totalQuantity }}
              </span>
              <span style="font-size: 1rem;">
                Next
              </span>
              <span style="position: absolute; right: 10px; top: 6px; line-height: 34px; border-radius: 7px; min-width: 32px; height: 32px; font-size: 1rem;">
                {{ totalPrice }} KWD
              </span>
            </span>
            <span class="MuiTouchRipple-root"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>

import Vue from "vue";

export default {
  name: "reviewOrderComponent",
  data() {
    return {
      quantity: 1,
      product: [],
      totalAmount: 0.00,
      cart: [],
      selectedAddons: [],
      selectedVariants: [],
      totalQuantity: 0,
      totalPrice: 0.00,
    }
  },
  mounted() {
    this.$parent.loading = true
    this.cart = [];
    this.getCart()
  },
  methods: {
    getCart() {
      let self = this
      axios.get(APP_URL+'/get-all-cart')
        .then(response => {
          if (response.data.type === 'success') {
            console.log(response.data)
            self.cart = response.data.cart
            self.totalQuantity = response.data.quantity
            self.totalPrice = response.data.totalPrice
            this.$parent.loading = false
          }
        })
        .catch(e => {
          this.errors.push(e)
        })
    },
    removeCart(product) {
      let self = this
      axios.post(APP_URL+'/remove-cart', {
        'product': product.id
      })
          .then(response => {
            if (response.data.type === 'success') {
              self.cart = response.data.cart
              self.totalQuantity = response.data.quantity
              self.$parent.quantity = response.data.quantity
              self.$parent.price = response.data.totalPrice
              self.totalPrice = response.data.totalPrice
              Vue.toasted.success(response.data.message);
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    },
    productQuantityDecrement(id, quantity) {
      let self = this
      axios.post(APP_URL+'/decrement-cart-product', {
        'id': id,
        'quantity': quantity,
      })
          .then(response => {
            if (response.data.type === 'success') {
              self.cart = response.data.cart
              self.totalQuantity = response.data.quantity
              self.totalPrice = response.data.totalPrice
              Vue.toasted.success(response.data.message);
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    },

    productQuantityIncrement(id, quantity) {
      let self = this
      axios.post(APP_URL+'/increment-cart-product', {
        'id': id,
        'quantity': quantity,
      })
          .then(response => {
            if (response.data.type === 'success') {
              self.cart = response.data.cart
              self.totalQuantity = response.data.quantity
              self.totalPrice = response.data.totalPrice
              Vue.toasted.success(response.data.message);
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    },

  },
}
</script>
<style src="vue-tel-input/dist/vue-tel-input.css"></style>

<style>
.MuiListItem-root {
  width: 100%;
  display: flex;
  position: relative;
  box-sizing: border-box;
  text-align: left;
  align-items: center;
  padding-top: 8px;
  padding-bottom: 8px;
  justify-content: flex-start;
  text-decoration: none;
}
</style>