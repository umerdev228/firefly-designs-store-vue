<template>
  <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);">
    <div class="p-0 h-100">
      <div class=" w-100 mx-0" style="overflow: hidden scroll; min-height: 542px;">

        <simple-header v-if="$parent.language === 'en'" title="Checout Confirmation"></simple-header>
        <simple-header v-else title="تأكيد Checout"></simple-header>        <div class="free-space-60"></div>

        <p v-if="$parent.language === 'en'" class="mb-1 text-left ml-3" style="font-weight: 600; font-size: 1rem; margin-top: 25px;">Deliver to</p>
        <p v-else class="mb-1 text-left ml-3" style="font-weight: 600; font-size: 1rem; margin-top: 25px;">يسلم إلى</p>
        <router-link :to="{name: 'AreasList'}" class="nav-item nav-link">
          <div class="border-top border-bottom row w-100 mx-0 justify-content-between" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="background-color: white; height: 60px;">
            <div class="col-1 align-self-center">
              <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: rgb(51, 51, 51);">
                <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"></path>
              </svg>
            </div>
            <div class="col-8 align-self-center ml-0 text-left" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="font-size: 1rem; font-weight: 400;">
              {{ $parent.selectedArea.name }}
            </div>
            <div class="col-2 align-self-center mr-4 pr-0 text-right">
              <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: rgb(51, 51, 51);">
                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34a.9959.9959 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
              </svg>
            </div>
          </div>
        </router-link>
        <router-link :to="{name: 'DeliveryAddress'}" class="nav-item nav-link">
          <div class="border-top border-bottom row w-100 mx-0 justify-content-between" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="background-color: white; height: 60px;">
            <div class="col-1 align-self-center">
              <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: rgb(51, 51, 51);">
                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1z"></path>
              </svg>
            </div>
            <div class="col-8 align-self-center ml-0 text-left" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="font-size: 1rem; font-weight: 400;">
              {{ email }}, {{ phone }}
            </div>
            <div class="col-2 align-self-center mr-4 pr-0 text-right">
              <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: rgb(51, 51, 51);">
                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34a.9959.9959 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
              </svg>
            </div>
          </div>
        </router-link>
        <p v-if="$parent.language === 'en'" class="mb-1 text-left ml-3" style="font-weight: 600; font-size: 1rem; margin-top: 25px;" >Items </p>
        <p v-else class="mb-1 text-left ml-3" style="font-weight: 600; font-size: 1rem; margin-top: 25px;" dir="rtl">العناصر</p>
        <div class="border-top border-bottom mx-0 py-3" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="background-color: white;">

          <div v-for="item in cart" class="row" style="cursor: pointer;">
            <div class="col-2 my-2" style="color: rgb(0, 153, 204);">
              {{ item.quantity }}x
            </div>
            <div class="col-7 my-2 text-left" style="font-weight: 300;">
              <span>
                {{ item.name }}
              </span>
              <div class="ml-2">
                <p class="text-muted m-0 px-2" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="font-size: 0.95rem;">
                  <span style="font-weight: 600;">
                    <!--                  Pot type:-->
                  </span>
                  <span>
                    {{ item.attributes.description }}
                  </span>
                </p>
              </div>
            </div>
            <div class="col-1 my-2 p-0 text-left" dir="rtl" style="font-weight: 300;">
              {{ item.price }}
            </div>
            <div class="col-1 my-2 p-0 text-right">
              KD
            </div>
          </div>
        </div>
        <div class="border mt-4 pt-3" style="background-color: white; height: 90px; padding-bottom: 80px;">
          <p v-if="$parent.language === 'en'" class="text-muted float-left ml-4">
            Special Remarks
          </p>
          <p v-else class="text-muted float-left ml-4">
            كلمة خاصة
          </p>
          <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth" style="width: 90%;">
            <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
              <input v-model="special_remark" aria-invalid="false" type="text" class="MuiInputBase-input MuiInput-input" value="">
            </div>
          </div>
        </div>
        <p v-if="$parent.language === 'en'" class="mb-1 text-left ml-3" style="font-weight: 600; font-size: 1rem; margin-top: 25px;">
          Payment Method
        </p>
        <p v-else class="mb-1 text-left ml-3" style="font-weight: 600; font-size: 1rem; margin-top: 25px;">
          طريقة الدفع او السداد
        </p>
        <div class="border-top border-bottom w-100 mx-0 mb-3 py-4" style="background-color: white;">
          <div class="MuiInputBase-root MuiInput-root MuiInput-underline  mx-auto" style="line-height: 2; width: 93%;">
            <div class="MuiSelect-root MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input" tabindex="0" role="button" aria-haspopup="listbox" aria-labelledby="demo-simple-select-label demo-simple-select" id="demo-simple-select">
              <select v-model="payment_type" v-if="$parent.language === 'en'" class="MuiButtonBase-root MuiListItem-root MuiMenuItem-root Mui-selected MuiMenuItem-gutters MuiListItem-gutters MuiListItem-button Mui-selected" tabindex="0" role="option" aria-disabled="false" dir="ltr" aria-selected="true" data-value="none">
                <option selected class="MuiFormHelperText-root mx-auto text-left" style="width: 92%;">
                  Please select a payment method
                </option>
                <option value="Cash" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  Cash
                </option>
                <option value="Bookeey" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  Bookeey
                </option>
                <option value="Knet" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  KNET
                </option>
                <option value="Credit" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  Credit Card
                </option>
                <span class="MuiTouchRipple-root"></span>
              </select>
              <select v-model="payment_type" v-else class="MuiButtonBase-root MuiListItem-root MuiMenuItem-root Mui-selected MuiMenuItem-gutters MuiListItem-gutters MuiListItem-button Mui-selected" tabindex="0" role="option" aria-disabled="false" dir="ltr" aria-selected="true" data-value="none">
                <option selected class="MuiFormHelperText-root mx-auto text-left" style="width: 92%;">
                  الرجاء اختيار طريقة الدفع
                </option>
                <option value="Cash" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  نقدي

                </option>
                <option value="Bookeey" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  Bookeey
                </option>
                <option value="Knet" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  KNET
                </option>
                <option value="Credit" class="float-left pl-2" style="line-height: 2; vertical-align: middle;">
                  بطاقة ائتمان
                </option>
                <span class="MuiTouchRipple-root"></span>
              </select>

              <span class="ml-auto float-right">
                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="width: 30px; height: 30px;">
                  <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                </svg>
              </span>
            </div>
            <input aria-hidden="true" tabindex="-1" class="MuiSelect-nativeInput">
            <svg class="MuiSvgIcon-root MuiSelect-icon" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M7 10l5 5 5-5z"></path>
            </svg>
          </div>


        </div>
        <p class="mt-4 mb-1 text-left ml-3 " style="font-weight: 600; font-size: 1rem;" dir="rtl">
          موعد التسليم
        </p>

        <div class="MuiPaper-root MuiMenu-paper MuiPopover-paper MuiPaper-elevation8 MuiPaper-rounded" tabindex="-1" style="opacity: 1; transform: none; min-width: 595px; transition: opacity 239ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 159ms cubic-bezier(0.4, 0, 0.2, 1) 0ms; top: 390px; left: 22px; transform-origin: 0px 43.2375px;">
          <div class="MuiList-root MuiMenu-list MuiList-padding" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-label">
          </div>
        </div>

        <div class="border-top border-bottom row w-100 mx-0 justify-content-between" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="background-color: white; height: 60px;">
          <div class="col-9 align-self-center ml-0 text-left" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="font-size: 1rem; font-weight: 400; color: red;">
            On Thursday Feb 11 - 11:00 AM - 12:00 PM
          </div>
          <div class="col-2 align-self-center mr-4 pr-0 text-right">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: rgb(51, 51, 51);">
              <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34a.9959.9959 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
            </svg>
          </div>
        </div>
        <div class="py-2 border-top totalCharge-english" style="position: fixed; width: 100%; bottom: 0px; background-color: white; height: 120px;">
          <div class="row mb-1" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
            <div class="col">
              <p v-if="$parent.language === 'en'" class="mb-0 float-left ml-4" style="font-size: 16px;">
                Delivery services
              </p>
              <p v-else class="mb-0 float-left ml-4" style="font-size: 16px;">
                خدمات توصيل
              </p>
            </div>
            <div class="col">
              <p class="mb-0 float-right mr-4" style="font-size: 16px;">
                <span>
                  3.000 KD
                </span>
              </p>
            </div>
          </div>
          <div class="row" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
            <div class="col">
              <p v-if="$parent.language === 'en'" class="float-left ml-4" style="font-size: 16px; font-weight: 600;">
                Total
              </p>
              <p v-else class="float-left ml-4" style="font-size: 16px; font-weight: 600;">
                مجموع
              </p>
            </div>
            <div class="col"><p class="float-right mr-4" style="font-size: 16px; font-weight: 600;">
              53.000 KD
            </p>
            </div>
          </div>
        </div>
        <div class="free-space-170"></div>
        <div class="action-button-english" style="background-color: white; padding-bottom: 8px; margin-bottom: 0px; height: 60px; z-index: 4;">
          <button class="MuiButtonBase-root MuiButton-root MuiButton-contained mb-1  ml-1 mx-auto MuiButton-containedPrimary" tabindex="0" type="button" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" :style="{'width': '97%', 'height': '100%', 'box-shadow': 'none', 'text-transform': 'none', 'background': $parent.settings.button_color}">
            <span class="MuiButton-label">
              <span v-on:click="confirmOrder" v-if="$parent.language === 'en'" style="font-size: 1rem;">
                Confirm Order
              </span>
              <span v-on:click="confirmOrder" v-else style="font-size: 1rem;">
                أكد الطلب
              </span>
            </span>
            <span class="MuiTouchRipple-root"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "checkoutConfirmationComponent",
  data() {
    return {
      email: '',
      name: '',
      phone: '',
      payment_type: '',
      special_remark: '',
      cart: [],
      totalPrice: [],
      quantity: [],
    }
  },
  created() {
    this.getCartItems()
    this.email = localStorage.getItem('customer_email')
    this.name = localStorage.getItem('customer_name')
    this.phone = localStorage.getItem('customer_phone')
  },
  mounted() {

  },
  methods: {
    getCartItems() {
      let self = this
      let order_id = localStorage.getItem('order_id')

      axios.get(APP_URL+'/get-all-cart')
        .then(response => {
          if (response.data.type === 'success') {
            self.cart = response.data.cart
            self.totalPrice = response.data.totalPrice
            self.quantity = response.data.quantity
          }
        })
        .catch(e => {
          this.errors.push(e)
        })
    },
    confirmOrder() {
      let self = this
      let order_id = localStorage.getItem('order_id')

      axios.post(APP_URL+'/confirm-order', {
        'order_id': order_id,
        'payment_type': self.payment_type,
        'special_remark': self.special_remark,
      }).then(response => {
          if (response.data.type === 'success') {
            window.location = "/payment?id="+order_id
          }
        })
        .catch(e => {
          this.errors.push(e)
        })
    }
  },
}
</script>

<style scoped>

</style>