<template>
  <div>
    <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);"><div class="p-0 h-100">
      <div style="background-color: white; min-height: 754px;">
        <simple-header v-if="$parent.language === 'en'" title="Order Track"></simple-header>
        <simple-header v-else title="تتبع الطلب"></simple-header>
        <div style="height: 50px;"></div>
        <h4 v-if="$parent.language === 'en'" class="text-left pl-3" style="font-family: Quicksand;">Your past orders</h4>
        <h4 v-else class="text-right pr-3" style="font-family: Cairo;">طلباتك السابقة</h4>
        <svg height="100" viewBox="0 0 480 480" width="100" class="mt-5">
          <path d="m480 72c0 39.765625-32.234375 72-72 72s-72-32.234375-72-72 32.234375-72 72-72 72 32.234375 72 72zm0 0" fill="#bf4653"></path>
          <path d="m272 176h176c17.671875 0 32 14.328125 32 32s-14.328125 32-32 32h-416c-17.671875 0-32-14.328125-32-32s14.328125-32 32-32h176" fill="#bc8f6f"></path>
          <path d="m448 200h-416c-13.425781 0-24.871094 8.28125-29.625 20 4.753906 11.71875 16.199219 20 29.625 20h416c13.425781 0 24.871094-8.28125 29.625-20-4.753906-11.71875-16.199219-20-29.625-20zm0 0" fill="#cb9e78"></path>
          <path d="m240 0c-17.671875 0-32 14.328125-32 32v160c0 17.671875 14.328125 32 32 32s32-14.328125 32-32v-160c0-17.671875-14.328125-32-32-32zm0 0" fill="#52575f"></path>
          <path d="m228 2.375c-11.71875 4.753906-20 16.199219-20 29.625v160c0 13.425781 8.28125 24.871094 20 29.625 11.71875-4.753906 20-16.199219 20-29.625v-160c0-13.425781-8.28125-24.871094-20-29.625zm0 0" fill="#666d77"></path>
          <path d="m448 240v208c0 17.671875-14.328125 32-32 32h-352c-17.671875 0-32-14.328125-32-32v-208" fill="#bf4653"></path>
          <path d="m64 480h350.871094c.664062-2.566406 1.128906-5.222656 1.128906-8v-208h-384v184c0 17.671875 14.328125 32 32 32zm0 0" fill="#dc6068"></path>
          <g fill="#fff">
            <path d="m184 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
            <path d="m104 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
            <path d="m296 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
            <path d="m376 432c-13.257812 0-24-10.742188-24-24v-96c0-13.257812 10.742188-24 24-24s24 10.742188 24 24v96c0 13.257812-10.742188 24-24 24zm0 0"></path>
          </g>
          <path d="m360 64h96v16h-96zm0 0" fill="#eebc5a"></path>
        </svg>
        <p v-if="$parent.language === 'en'" class="mt-3">You don't have any past orders</p>
        <p v-else class="mt-3">ليس لديك اي طلبات سابقة</p>
        <p v-if="$parent.language === 'en'" style="width: 90%; margin: 20px auto auto; text-align: left;">
          Have a tracking code? Enter it below
        </p>
        <p v-else style="width: 90%; margin: 20px auto auto; text-align: right;">لديك رقم تتبع؟ ادخله ادناه</p>
        <div v-if="$parent.language === 'en'" class="MuiFormControl-root MuiTextField-root mt-2 " style="width: 90%;">
          <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink" data-shrink="true" for="input-with-icon-textfield" id="input-with-icon-textfield-label" dir="ltr">
            Enter your tracking code
          </label>
          <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart" dir="ltr" style="height: 43px;">
            <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
              <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input aria-invalid="false" id="input-with-icon-textfield" type="text" class="MuiInputBase-input MuiInput-input MuiInputBase-inputAdornedStart" value=""></div>
        </div>
        <div v-else class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedStart" dir="rtl" style="height: 43px;">
          <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
            </svg>
          </div>
          <input aria-invalid="false" id="input-with-icon-textfield" type="text" class="MuiInputBase-input MuiInput-input MuiInputBase-inputAdornedStart" value="" style="padding-right: 10px;">
        </div>
      </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "orderTrackComponent"
}
</script>

<style scoped>

</style>