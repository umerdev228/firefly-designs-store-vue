<template>
  <div class="col-lg-12 col-md-12 col-12 p-0 w-100 " style="overflow: hidden scroll; background-color: rgb(244, 245, 245); min-height: calc(100% - 60px); height: calc(100% - 60px);">
    <div class="p-0 h-100">
      <div class="w-100 mx-0" style="min-height: 650px; background-color: white;">
        <simple-header v-if="$parent.language === 'en'" title="Address"></simple-header>
        <simple-header v-else title="تبوك"></simple-header>
        <div class="border-top w-100" style="margin-top: 55px; background-color: white;">
          <div class="row stepperWidth" style="position: fixed; top: 53px; height: 5px; background-color: white; margin-right: auto; margin-left: auto;">
            <div class="col mx-1 align-self-center" :style="{'background-color': $parent.settings.button_color}" style="width: 30px; height: 2px;"></div>
            <div class="col mx-1 align-self-center" :style="{'background-color': $parent.settings.button_color}" style="width: 30px; height: 2px;"></div>
          </div>
          <div class="free-space-20-white"></div>
          <div :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="margin-top: 20px;">
            <div class="ui buttons" style="max-width: 320px; width: 90%;">
              <button class="ui button" :style="{'background-color': $parent.settings.button_color, 'color': 'white', 'border-radius': '0.285714rem', 'font-family': 'Quicksand'}">
                Delivery
              </button>
            </div>
          </div>
          <svg height="100" viewBox="-14 0 452 452.00019" width="100" class="mt-4">
            <path d="m379.601562 245.5 45.199219 206.5-98.199219-35.699219-.703124.199219-26.796876-205.101562.398438-.199219zm0 0" fill="#00acea"></path>
            <path d="m268.5 24.300781c30.800781 32.839844 30.800781 83.957031 0 116.800781l-56.101562 58.597657-56.097657-58.597657c-30.800781-32.402343-30.800781-84.703124 0-116.800781 14.539063-15.503906 34.84375-24.300781 56.097657-24.300781 21.257812 0 41.5625 8.796875 56.101562 24.300781zm-22.800781 47.398438c0-18.390625-14.90625-33.300781-33.300781-33.300781-18.390626 0-33.296876 14.910156-33.296876 33.300781s14.90625 33.300781 33.296876 33.300781c18.394531.007812 33.308593-14.90625 33.300781-33.300781zm0 0" fill="#fedb41"></path>
            <path d="m212.398438 446.101562v-199.703124l86.703124-35 26.796876 205.101562-113.5 31.800781-.597657-.199219zm0 0" fill="#00efd1"></path>
            <path d="m212.398438 246.398438v199.703124l-.597657 2-113.601562-34.101562 27.101562-204.199219zm0 0" fill="#00acea"></path>
            <path d="m125.300781 209.800781-27.101562 204.199219-98.199219 36.601562 45.199219-206.5zm0 0" fill="#00efd1"></path>
          </svg>
          <p v-if="$parent.language === 'en'" :style="{'color': $parent.settings.button_color}" class="text-muted mt-3 mb-0" style="font-size: 22px;">Delivery Information</p>
          <p v-else class="text-muted mt-3 mb-0" style="font-size: 22px;">معلومات التوصيل</p>
          <p v-if="$parent.language === 'en'" :style="{'color': $parent.settings.button_color}" class="mx-auto w-75 mb-0" style="font-size: 15px; color: rgb(194, 194, 194);">
            Help us get to you faster
          </p>
          <p v-else class="mx-auto w-75 mb-0" :style="{'color': $parent.settings.button_color}" style="font-size: 15px; color: rgb(194, 194, 194);">
            ساعدنا في الوصول إليك بشكل أسرع
          </p>
          <div style="height: 300px; width: 100%; margin-top: 20px;">
            <div style="width: 100%; height: 100%; margin: 0px; padding: 0px; position: relative;">
              <div style="width: 100%; height: 100%; left: 0px; top: 0px; margin: 0px; padding: 0px; position: absolute; overflow: hidden;">
                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                  <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                    <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                      <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                          <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                            <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -174, -206);">
                              <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                <div style="width: 256px; height: 256px;"></div>
                              </div>
                              <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                <div style="width: 256px; height: 256px;"></div>
                              </div>
                              <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                <div style="width: 256px; height: 256px;"></div>
                              </div>
                              <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                <div style="width: 256px; height: 256px;"></div>
                              </div>
                              <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                <div style="width: 256px; height: 256px;"></div>
                              </div>
                              <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                <div style="width: 256px; height: 256px;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                          <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -174, -206);">
                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                              <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i92596!3i53439!4i256!2m3!1e0!2sm!3i542266342!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjJ8cy5lOmx8cC52Om9mZg!4e0!5m1!5f2&amp;key=AIzaSyCmyfpG7qTrGjmxnbEzY4MYD_NInKdh_IA&amp;token=74459" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                              <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i92595!3i53439!4i256!2m3!1e0!2sm!3i542266342!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjJ8cy5lOmx8cC52Om9mZg!4e0!5m1!5f2&amp;key=AIzaSyCmyfpG7qTrGjmxnbEzY4MYD_NInKdh_IA&amp;token=120172" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                              <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i92595!3i53438!4i256!2m3!1e0!2sm!3i542266114!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjJ8cy5lOmx8cC52Om9mZg!4e0!5m1!5f2&amp;key=AIzaSyCmyfpG7qTrGjmxnbEzY4MYD_NInKdh_IA&amp;token=26841" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                              <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i92596!3i53438!4i256!2m3!1e0!2sm!3i542266330!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjJ8cy5lOmx8cC52Om9mZg!4e0!5m1!5f2&amp;key=AIzaSyCmyfpG7qTrGjmxnbEzY4MYD_NInKdh_IA&amp;token=65777" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                              <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i92597!3i53438!4i256!2m3!1e0!2sm!3i542266330!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjJ8cy5lOmx8cC52Om9mZg!4e0!5m1!5f2&amp;key=AIzaSyCmyfpG7qTrGjmxnbEzY4MYD_NInKdh_IA&amp;token=20064" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                              <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i92597!3i53439!4i256!2m3!1e0!2sm!3i542266342!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjJ8cy5lOmx8cC52Om9mZg!4e0!5m1!5f2&amp;key=AIzaSyCmyfpG7qTrGjmxnbEzY4MYD_NInKdh_IA&amp;token=28746" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                          </div>
                        </div>
                      </div>
                      <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                        <p class="gm-style-pbt"></p>
                      </div>
                      <div style="display: none; z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                          <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                          <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                          <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                            <div style="background-color: transparent; position: absolute; left: 0px; top: 0px; width: 1536px; height: 864px;">
                              <div style="width: 100%; height: 100%; left: 0px; top: 0px; margin: 0px; padding: 0px; position: absolute;"></div>
                            </div>
                          </div>
                          <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                        </div>
                      </div>
                    </div>
                    <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" __idm_frm__="91"></iframe>
                    <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                    <div>
                      <div style="z-index: 0; position: absolute; left: 0px; top: 0px;"><div>
                        <button class="" aria-label="Find My Location" type="button" style="background-color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255); margin: 10px; outline: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 110px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: flex; align-items: center; z-index: 9;">
                          <svg class="MuiSvgIcon-root mx-auto" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm8.94 3c-.46-4.17-3.77-7.48-7.94-7.94V1h-2v2.06C6.83 3.52 3.52 6.83 3.06 11H1v2h2.06c.46 4.17 3.77 7.48 7.94 7.94V23h2v-2.06c4.17-.46 7.48-3.77 7.94-7.94H23v-2h-2.06zM12 19c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"></path>
                          </svg>
                          <p class="mx-auto english-font" style="padding-left: 4px;">
                            Find Location
                          </p>
                        </button>
                      </div>
                      </div>
                      <div style="z-index: 0; position: absolute; left: 0px; top: 0px;"><div>
                        <button aria-label="Edit My Location" type="button" style="background-color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255); margin: 10px; padding: 5px; outline: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 110px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: flex; align-items: center; z-index: 9;">
                          <svg class="MuiSvgIcon-root mx-auto" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34a.9959.9959 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                          </svg>
                          <p class="mx-auto english-font">
                            Edit Location
                          </p>
                        </button>
                      </div>
                      </div>
                    </div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div>
                      <button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                      </button>
                    </div>
                    <div></div>
                    <div>
                      <div style="z-index: 0; position: absolute; left: 320px; top: 150px;">
                        <div class="my-auto" style="position: absolute; top: 50%; left: 50%; z-index: 10;">
                          <span class="pin bounce" style="background: blue;"></span>
                          <span class="pulse"></span>
                        </div>
                      </div>
                    </div>
                    <div></div>
                    <div></div>
                    <div>
                      <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                        <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                          <div style="width: 40px; height: 40px;">
                            <button draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;">
                            </button>
                            <button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                            </button>
                          </div>
                        </div>
                        <div class="gmnoprint" style="position: absolute; left: 0px; top: 0px;">
                          <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                            <button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                            </button>
                            <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                            <button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                              <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                        <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=31.506432,74.324378&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;">
                          <div style="width: 66px; height: 26px; cursor: pointer;">
                            <img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div></div>
                    <div>
                      <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 86px;">
                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                          <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                            <div style="width: 1px;"></div>
                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                          </div>
                          <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                            <a style="text-decoration: none; cursor: pointer; display: none;">
                              Map Data
                            </a>
                            <span>
                              Map data ©2021
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                          <div style="width: 1px;"></div>
                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                        </div>
                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                          <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">
                            Terms of Use
                          </a>
                        </div>
                      </div>
                      <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                          <div style="width: 1px;"></div>
                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                        </div>
                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                          <a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" href="https://www.google.com/maps/@31.506432,74.3243776,17z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report a map error</a>
                        </div>
                      </div>
                      <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                          Map data ©2021
                        </div>
                      </div>
                    </div>
                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 170px; top: 60px;">
                      <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">
                        Map Data
                      </div>
                      <div style="font-size: 13px;">Map data ©2021</div>
                      <button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
            <div v-if="$parent.language === 'en'" class="ui buttons" style="max-width: 320px; width: 90%;">
              <button v-on:click="address_type = 'house'" class="ui button" style="border-radius: 0.285714rem;" :style="[address_type === 'house' ?  {'background-color': $parent.settings.button_color, 'color': 'white'} : '']">
                House
              </button>
              <div class="or" data-text="or"></div>
              <button v-on:click="address_type = 'apartment'" class="ui button" style="border-radius: 0.285714rem; font-family: Quicksand;" :style="[address_type === 'apartment' ?  {'background-color': $parent.settings.button_color, 'color': 'white'} : '']">
                Apartment
              </button>
              <div class="or" data-text="or"></div>
              <button v-on:click="address_type = 'office'" class="ui button" style="border-radius: 0.285714rem; font-family: Quicksand;" :style="[address_type === 'office' ?  {'background-color': $parent.settings.button_color, 'color': 'white'} : '']">
                Office
              </button>
            </div>
            <div v-else class="ui buttons" style="max-width: 320px; width: 90%;">
              <button v-on:click="address_type = 'house'" class="ui button" style="border-radius: 0.285714rem;" :style="[address_type === 'house' ?  {'background-color': $parent.settings.button_color, 'color': 'white'} : '']">
                بيت
              </button>
              <div class="or-ar" data-text="or"></div>
              <button v-on:click="address_type = 'apartment'" class="ui button" style="border-radius: 0.285714rem; font-family: Quicksand;" :style="[address_type === 'apartment' ?  {'background-color': $parent.settings.button_color, 'color': 'white'} : '']">
                شقة
              </button>
              <div class="or-ar" data-text="or"></div>
              <button v-on:click="address_type = 'office'" class="ui button" style="border-radius: 0.285714rem; font-family: Quicksand;" :style="[address_type === 'office' ?  {'background-color': $parent.settings.button_color, 'color': 'white'} : '']">
                مكتب. مقر. مركز
              </button>
            </div>
          </div>
          <div class="w-100 mr-3" style="margin-left: 0px;">
            <div class="row align-items-end mx-auto" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="margin-top: 20px; width: 95%;"><div class="col-6 mb-3">
              <label v-if="$parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-animated" id="demo-simple-select-label" style="text-align: left; display: inline-block; min-width: 153px; width: 100%;">
                Country
              </label>
              <label v-else class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-animated" id="demo-simple-select-label" style="text-align: left; display: inline-block; min-width: 153px; width: 100%;">
                دولة
              </label>
              <div class="MuiInputBase-root MuiInput-root MuiInput-underline" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" style="width: 100%;">
                <div class="MuiSelect-root pr-5 MuiSelect-select MuiSelect-selectMenu MuiInputBase-input MuiInput-input" tabindex="0" role="button" aria-haspopup="listbox" aria-labelledby="demo-simple-select-label demo-simple-select" id="demo-simple-select"><span>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/a/aa/Flag_of_Kuwait.svg" width="20" height="20" class="mx-2"></span>
                  Kuwait
                </div>
                <input name="country" aria-hidden="true" tabindex="-1" class="MuiSelect-nativeInput" value="24">
                <svg class="MuiSvgIcon-root MuiSelect-icon" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M7 10l5 5 5-5z"></path>
                </svg>
              </div>
            </div>
              <div class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!area && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="area" id="area-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    area
                  </label>
                  <label v-if="!area && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="area" id="area-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    منطقة
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input v-if="$parent.language === 'en'" @click="$router.push('/areas')" aria-invalid="false" id="area" name="area" v-model="area" type="text" class="MuiInputBase-input MuiInput-input" >
                    <input v-else @click="$router.push('/areas')" aria-invalid="false" id="area" name="area" v-model="area_ar" type="text" class="MuiInputBase-input MuiInput-input" >
                  </div>
                </div>
              </div>
              <div class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!block && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="blockTextField" id="blockTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Block
                  </label>
                  <label v-if="!block && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="blockTextField" id="blockTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    القطعة
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="blockTextField" name="block" v-model="block" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!street && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="streetTextField" id="streetTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Street
                  </label>
                  <label v-if="!street && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="streetTextField" id="streetTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    شارع
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="streetTextField" name="street" v-model="street" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div v-if="address_type === 'house' " class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!house && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="house" id="house-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    House #
                  </label>
                  <label v-if="!house && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="house" id="house-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    بيت #
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="house" name="house" v-model="house" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div v-if="address_type === 'apartment' || address_type === 'office'" class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!building && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="building" id="building-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Building #
                  </label>
                  <label v-if="!building && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="building" id="building-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    مبنى #
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="building" name="building" v-model="building" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div v-if="address_type === 'apartment' || address_type === 'office'" class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!floor && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="floor" id="floor-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Floor #
                  </label>
                  <label v-if="!floor && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="floor" id="floor-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    الطابق #
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="floor" name="floor" v-model="floor" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div v-if="address_type === 'apartment'" class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!apartment  && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="apartment" id="apartment-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Apartment #
                  </label>
                  <label v-if="!apartment  && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="apartment" id="apartment-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    شقة #
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="apartment" name="apartment" v-model="apartment" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div v-if="address_type === 'office'" class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!office  && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="office" id="office-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Office
                  </label>
                  <label v-if="!office  && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="office" id="office-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    مكتب. مقر. مركز
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="office" name="office" v-model="office" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div class="col-6 my-3">
                <div class="MuiFormControl-root MuiTextField-root" style="width: 100%;">
                  <label v-if="!avenue  && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="avenueTextField" id="avenueTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Avenue
                  </label>
                  <label v-if="!avenue  && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="avenueTextField" id="avenueTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    الجادة
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="avenueTextField" name="avenue" v-model="avenue" type="text" class="MuiInputBase-input MuiInput-input" value="">
                  </div>
                </div>
              </div>
              <div class="col-12 mt-3">
                <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                  <label v-if="!additional  && $parent.language === 'en'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="additionalTextField" id="additionalTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    Additional info
                  </label>
                  <label v-if="!additional  && $parent.language === 'ar'" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated" data-shrink="false" for="additionalTextField" id="additionalTextField-label" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    معلومات إضافية
                  </label>
                  <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'">
                    <input aria-invalid="false" id="additionalTextField" name="additional" v-model="additional" type="text" class="MuiInputBase-input MuiInput-input" value=""></div>
                </div>
              </div>
            </div>
          </div>
          <div class="action-button-english" style="background-color: white; padding-bottom: 8px; margin-bottom: 0px; height: 60px; z-index: 4;">
            <button v-on:click="updateOrder()" class="MuiButtonBase-root MuiButton-root MuiButton-contained mb-1  ml-1 mx-auto MuiButton-containedPrimary" tabindex="0" type="button" :dir="$parent.language === 'en' ? 'ltr' : 'rtl'" :style="{'width': '97%', 'height': '100%', 'box-shadow': 'none', 'text-transform': 'none', 'background': $parent.settings.button_color}">
              <span class="MuiButton-label">
                <span style="font-size: 1rem;">
                  Next
                </span>
              </span>
              <span class="MuiTouchRipple-root"></span>
            </button>
          </div>
        </div>
        <div class="free-space-190-white"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "deliveryAddressComponent",
  data() {
    return {
      products: [],
      area: this.$parent.selectedArea.name,
      area_ar: this.$parent.selectedArea.name_ar,
      address_type: 'house',
      block: "",
      street: "",
      building: "",
      house: "",
      floor: "",
      apartment: "",
      office: "",
      avenue: "",
      paci: "",
      additional: "",
    }
  },
  created() {

  },
  mounted() {

  },
  methods: {
    updateOrder() {
      let self = this

      let address_type = this.address_type
      let block = this.block
      let street = this.street
      let building = this.building
      let house = this.house
      let floor = this.floor
      let apartment = this.apartment
      let office = this.office
      let avenue = this.avenue
      let paci = this.paci
      let additional = this.additional
      let order_id = localStorage.getItem('order_id')

      axios.post(APP_URL+'/updateOrder', {
        'address_type': address_type,
        'block': block,
        'street': street,
        'building': building,
        'house': house,
        'floor': floor,
        'apartment': apartment,
        'office': office,
        'avenue': avenue,
        'paci': paci,
        'additional': additional,
        'order_id': order_id,
      })
        .then(response => {
          if (response.data.type === 'success') {
            Vue.toasted.success(response.data.message);
            self.$router.push('/checkout/confirmation')
            // window.location = "/payment?id="+response.data.order_id
          }
        })
        .catch(e => {
          this.errors.push(e)
        })
    },

  }
}
</script>

<style scoped>

</style>