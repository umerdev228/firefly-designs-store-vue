<template>
  <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);">
    <div class="p-0 h-100">
      <div class=" p-0" style="background-color: rgb(244, 245, 245);">

        <simple-header v-if="$parent.language === 'en'" title="Contact Us"></simple-header>
        <simple-header v-if="$parent.language === 'ar'" title="اتصل بنا"></simple-header>

        <div class="w-100 text-center border-top py-3 mt-2">
          <p style="line-height: 2;"></p>
        </div>
        <div class="w-100 text-center mt-2" style="height: 100px; background-color: white; border-width: 1px; border-top-style: solid; border-bottom-style: solid; border-bottom-color: rgb(212, 217, 217); border-top-color: rgb(212, 217, 217);">
          <p class="text-muted pt-2 text-left" style="margin-left: 24px; margin-right: 0;">
            <!--          {{ $parent.settings.site_name }}-->
          </p>
          <div class="row justify-content-start row-reverse" style="padding: 0px 10px;">
            <div class="col p-0 order-1">
              <a :href="'https://api.whatsapp.com/send?phone='+$parent.settings.whatsapp">
                <button class="MuiButtonBase-root MuiIconButton-root p-0" tabindex="0" type="button">
                  <span class="MuiIconButton-label">
                    <svg id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" style="height: 28.36px; width: 28.36px;">
                      <path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104 l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" style="fill: rgb(76, 175, 80);"></path>
                      <path d="M405.024,361.504c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264 C189.888,347.2,141.44,270.752,137.664,265.792c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304 c6.176-6.304,16.384-9.184,26.176-9.184c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64 c6.176,14.88,21.216,51.616,23.008,55.392c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744 c-3.776,4.352-7.36,7.68-11.136,12.352c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616 c28.576,25.44,51.744,33.568,60.032,37.024c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496 c5.12-7.232,11.584-8.128,18.368-5.568c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736 C411.2,329.152,411.2,344.032,405.024,361.504z" style="fill: rgb(250, 250, 250);"></path>
                    </svg>
                  </span>
                  <span class="MuiTouchRipple-root"></span>
                </button>
              </a>
            </div>
            <div class="col p-0 order-2">
              <a :href="$parent.settings.instagram">
                <button class="MuiButtonBase-root MuiIconButton-root p-0" tabindex="0" type="button">
                  <span class="MuiIconButton-label">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: brown;">
                      <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                    </svg>
                  </span>
                  <span class="MuiTouchRipple-root"></span>
                </button>
              </a>
            </div>
            <div class="col p-0 order-3">
              <a :href="'tel:'+$parent.settings.phone_number">
                <button class="MuiButtonBase-root MuiIconButton-root p-0" tabindex="0" type="button">
                  <span class="MuiIconButton-label">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="color: blue;">
                      <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
                    </svg>
                  </span>
                  <span class="MuiTouchRipple-root"></span>
                </button>
              </a>
            </div>
          </div>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "contactUsComponent",
  data() {
    return {}
  },
  created() {},
  mounted() {},
  computed:{},
  methods: {}
}
</script>

<style>

</style>