<template>
  <div class="border-bottom detail_header" style="top: 0; background-image: none; background-color: white; z-index: 1000;">
    <button v-on:click="$router.go(-1)" class="MuiButtonBase-root MuiButton-root MuiButton-text back_arrow mt-1" tabindex="0" type="button" style="float: left; height: 50px; max-width: 30px; margin-left: 10px; margin-right: 0px; display: inline-block; z-index: 22;">
      <span class="MuiButton-label">
        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
        </svg>
      </span>
      <span class="MuiTouchRipple-root"></span>
    </button>
    <div class="row" style="position: absolute; width: 100%; left: 15px; top: 0px; display: inline-block; line-height: 3.2;">
      <div class="col text-center">
        <p style="font-weight: 600; font-size: 17px; max-width: 187px; margin-left: auto; margin-right: auto; max-height: 54px; line-height: 3; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
          {{ title }}
        </p>
      </div>
    </div>
    <button class="MuiButtonBase-root MuiButton-root MuiButton-text back_arrow mt-1 languageMakeDisappearForLargeScreen" tabindex="0" type="button" style="float: right; height: 50px; margin-right: 10px; margin-left: 0px; font-size: 20px; padding-bottom: 15px; color: black; display: inline; z-index: 22;">
      <span class="MuiButton-label">ع</span>
      <span class="MuiTouchRipple-root"></span>
    </button>
    <button class="MuiButtonBase-root MuiButton-root MuiButton-text  mt-1 languageMakeDisappearForLargeScreen" tabindex="0" type="button" style="float: right; height: 50px; max-width: 30px; display: inline-block; z-index: 22;">
      <span class="MuiButton-label">
        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: black;">
          <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
        </svg>
      </span>
      <span class="MuiTouchRipple-root"></span>
    </button>
  </div>
</template>

<script>
export default {
  name: "simpleHeader",
  props: ['title'],
  data() {
    return {

    }
  },
  created() {
  },
  methods: {

  }
}
</script>

<style scoped>

</style>