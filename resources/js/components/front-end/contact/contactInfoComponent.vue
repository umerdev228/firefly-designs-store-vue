<template>
  <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);">
    <div class="p-0 h-100">
      <div class="  w-100 mx-0 " style="background-color: white; height: 769px; min-height: 690px;">
        <simple-header v-if="$parent.language === 'en'" title="Contact Information"></simple-header>
        <simple-header v-else title="معلومات الاتصال"></simple-header>
        <div class="border-top w-100" style="margin-top: 55px; background-color: white;">
          <div class="row stepperWidth" style="position: fixed; top: 53px; height: 5px; background-color: white; margin-right: auto; margin-left: auto;">
            <div class="col mx-1 align-self-center" :style="{'background-color': $parent.settings.button_color}" style="width: 30px; height: 2px;"></div>
            <div class="col mx-1 align-self-center" style="width: 30px; height: 2px; background-color: rgb(209, 206, 206);"></div>
          </div>
          <svg height="100" viewBox="0 -20 440.4 440" width="100" style="margin-top: 98px;">
            <path d="m440.398438 90.199219v290.859375c.003906 11.046875-8.953126 20.003906-20 20h-400.398438c-11.046875.003906-20.00390625-8.953125-20-20v-290.859375zm0 0" fill="#00efd1"></path>
            <path d="m440.398438 20.199219v70h-440.398438v-70c-.00390625-11.046875 8.953125-20.003907 20-20h400.398438c11.046874-.003907 20.003906 8.953125 20 20zm0 0" fill="#00acea"></path>
            <path d="m390.199219 29.171875h30v30h-30zm0 0" fill="#fedb41"></path>
            <path d="m338.199219 29.171875h30v30h-30zm0 0" fill="#fedb41"></path>
            <path d="m20.199219 29.171875h290v30h-290zm0 0" fill="#fedb41"></path>
            <path d="m169.410156 253.28125c9.964844 0 19.464844 4.21875 26.144532 11.613281 6.683593 7.394531 9.921874 17.269531 8.914062 27.183594v56.480469h-149.570312v-56.480469c-1.003907-9.914063 2.234374-19.792969 8.917968-27.1875s16.1875-11.613281 26.152344-11.609375h26.890625v.039062l4.78125 19.660157h-.519531l-7.019532 44.550781v.007812l15.589844 15 16.578125-15-8.070312-44.550781-16.558594-.007812h16.089844l4.789062-19.660157v-.039062zm0 0" fill="#00acea"></path>
            <path d="m162.429688 178.28125v26.207031c0 18.742188-15.191407 33.933594-33.929688 33.933594s-33.929688-15.191406-33.929688-33.933594v-25.648437c13.441407 2.238281 22.269532-4.589844 27.628907-12.410156h.011719c7.097656 10.410156 19.757812 20.628906 40.21875 11.851562zm0 0" fill="#f7caa5"></path>
            <path d="m162.429688 170.699219v7.582031c-20.460938 8.777344-33.121094-1.441406-40.21875-11.851562-3.273438-4.84375-5.816407-10.144532-7.539063-15.730469h27.757813c11.042968.003906 19.996093 8.957031 20 20zm0 0" fill="#4b5d63"></path>
            <path d="m138.199219 272.988281 8.070312 44.550781-16.578125 15-15.589844-15v-.007812l7.019532-44.550781h.519531zm0 0" fill="#fedb41"></path>
            <path d="m142.519531 253.28125v.039062l-4.789062 19.660157h-16.089844l-4.78125-19.660157v-.039062zm0 0" fill="#fedb41"></path>
            <path d="m122.210938 166.429688h-.011719c-5.359375 7.820312-14.1875 14.648437-27.628907 12.410156v-8.140625c.003907-11.042969 8.957032-19.996094 20-20h.101563c1.722656 5.585937 4.265625 10.886719 7.539063 15.730469zm0 0" fill="#4b5d63"></path>
            <g fill="#fedb41">
              <path d="m243.199219 195.628906h82c3.316406 0 6-2.683594 6-6 0-3.3125-2.683594-6-6-6h-82c-3.3125 0-6 2.6875-6 6 0 3.316406 2.6875 6 6 6zm0 0"></path>
              <path d="m243.199219 225.628906h142c3.316406 0 6-2.683594 6-6 0-3.3125-2.683594-6-6-6h-142c-3.3125 0-6 2.6875-6 6 0 3.316406 2.6875 6 6 6zm0 0"></path>
              <path d="m385.199219 243.628906h-142c-3.3125 0-6 2.6875-6 6 0 3.316406 2.6875 6 6 6h142c3.316406 0 6-2.683594 6-6 0-3.3125-2.683594-6-6-6zm0 0"></path>
              <path d="m385.199219 273.628906h-142c-3.3125 0-6 2.6875-6 6 0 3.316406 2.6875 6 6 6h142c3.316406 0 6-2.683594 6-6 0-3.3125-2.683594-6-6-6zm0 0"></path>
              <path d="m385.199219 303.628906h-142c-3.3125 0-6 2.6875-6 6 0 3.316406 2.6875 6 6 6h142c3.316406 0 6-2.683594 6-6 0-3.3125-2.683594-6-6-6zm0 0"></path>
            </g>
          </svg>
          <p v-if="$parent.language === 'en'" class="text-muted mt-3 mb-0" style="font-size: 22px;">
            Contact Information
          </p>
          <p v-else class="text-muted mt-3 mb-0" style="font-size: 22px;">
            معلومات الاتصال
          </p>
          <p v-if="$parent.language === 'en'" class="mx-auto w-75" style="font-size: 15px; color: rgb(194, 194, 194);">
            We need this information to contact you and get the order delivered
          </p>
          <p v-else class="mx-auto w-75" style="font-size: 15px; color: rgb(194, 194, 194);">
            نحتاج إلى هذه المعلومات للاتصال بك وتسليم الطلب
          </p>
          <div class="w-100 px-4">
            <form>
              <div class="MuiFormControl-root MuiTextField-root my-4 MuiFormControl-fullWidth">
                <label v-if="!name && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="name" id="name-standard-basic-label" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                  Name *
                </label>
                <label v-if="!name && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="name" id="name-standard-basic-label" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                  اسم *
                </label>
                <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                  <input aria-invalid="false" id="name" name="name" v-model="name" type="text" class="MuiInputBase-input MuiInput-input" value="" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                </div>
              </div>
              <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                <label v-if="!email && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="email" id="email-standard-basic-label" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                  Email
                </label>
                <label v-if="!email && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="email" id="email-standard-basic-label" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                  بريد الالكتروني
                </label>
                <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                  <input aria-invalid="false" id="email" name="email" v-model="email" type="email" class="MuiInputBase-input MuiInput-input" value="" :dir=" $parent.language === 'en' ? 'ltr' : 'rtl'">
                </div>
              </div>
              <div class="MuiFormControl-root MuiTextField-root mt-4 mb-3 MuiFormControl-fullWidth">
                <vue-phone-number-input
                    size="lg"
                    v-model="phone"
                    :default-phone-number="phone_number"
                    @update="result = $event"
                    default-country-code="KW"
                    default-country="KW"
                />
              </div>
              <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                  <!--                  <input aria-invalid="false" id="address" name="address" v-model="address" type="text" class="MuiInputBase-input MuiInput-input" value="">-->
                </div>
              </div>

            </form>
          </div>
          <div class="action-button-english" style="background-color: white; padding-bottom: 8px; margin-bottom: 0px; height: 60px; z-index: 4;">
            <button v-on:click="createOrder()" class="MuiButtonBase-root MuiButton-root MuiButton-contained mb-1  ml-1 mx-auto MuiButton-containedPrimary" tabindex="0" type="button" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" :style="{'width': '97%', 'height': '100%', 'box-shadow': 'none', 'text-transform': 'none', 'background': $parent.settings.button_color}">
              <span class="MuiButton-label">
                <span style="font-size: 1rem;">
                  Next
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
  name: "contactInfoComponent",
  data() {
    return{
      name: '',
      phone: '',
      phone_number: '',
      email: '',
      address: '',
      payment_type: '',
      result: null,
      block: '',
      street: '',
      building: '',
      avenue: '',
      additional: '',
    }
  },
  created() {
    if (localStorage.getItem('customer_name')) {
      this.name = localStorage.getItem('customer_name')
    }
    if (localStorage.getItem('customer_phone')) {
      this.phone_number = localStorage.getItem('customer_phone')
    }
    if (localStorage.getItem('customer_email')) {
      this.email = localStorage.getItem('customer_email')
    }
  },
  methods: {
    createOrder() {
      let self = this
      if (!this.result || !this.name) {
        if (this.$parent.language === 'ar') {
          Vue.toasted.error('أدخل رقم واسم الجوال');
        }
        else {
          Vue.toasted.error('Enter Mobile Number & Name');
        }
        return
      }

      let name = this.name
      let phone = this.result.formattedNumber
      let email = this.email

      let phone_number = this.result.formatNational

      localStorage.setItem('customer_name', name)
      localStorage.setItem('customer_phone', phone_number)
      localStorage.setItem('customer_email', email)

      axios.post(APP_URL+'/createOrder', {
        'name': name,
        'phone': phone,
        'email': email,
        'area': self.$parent.selectedArea,
      })
          .then(response => {
            if (response.data.type === 'success') {
              localStorage.setItem('order_id', response.data.order_id)
              self.$router.push('/checkout/address')
              // window.location = "/payment?id="+response.data.order_id
            }
            else if (response.data.type === 'error') {
              Vue.toasted.error(response.data.message)
            }
          })
          .catch(e => {
            this.errors.push(e)
          })
    },
    paymentType(type) {
      this.payment_type = type
    }
  }
}
</script>

<style scoped>

</style>