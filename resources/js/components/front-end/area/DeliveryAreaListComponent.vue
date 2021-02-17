<template>
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 products-ltr">
    <simple-header v-if="$parent.language === 'en'" title="Choose Area"></simple-header>
    <simple-header v-else title="اختر المنطقة"></simple-header>
    <div class="row mt-2">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
            Delivery
          </a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div v-for="(government, parent) in governments" style="background-color: white;">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button v-if="$parent.language === 'en'" class="btn btn-link" type="button" data-toggle="collapse" :data-target="'#collapse-'+parent" aria-expanded="true" aria-controls="collapseOne">
                      {{ government.name }} <i class="fas fa-angle-down"></i>
                    </button>
                    <button v-else class="btn btn-link" type="button" data-toggle="collapse" :data-target="'#collapse-'+parent" aria-expanded="true" aria-controls="collapseOne">
                      {{ government.name_ar }} <i class="fas fa-angle-down"></i>
                    </button>
                  </h2>
                </div>
                <div v-for="area in government.areas" :id="'collapse-'+parent" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body" style="padding:10px!important;padding-left: 40px!important;">
                    <a style="color: black;" @click="selectArea(area)" href="javascript:void(0)">
                      <h6 v-if="$parent.language === 'en'" style="border-left: 2px solid #000000;padding-left: 7px;">
                        {{ area.name }}
                    </h6>
                      <h6 v-else style="border-left: 2px solid #000000;padding-left: 7px;">
                        {{ area.name_ar }}
                    </h6>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DeliveryAreaListComponent",
  data() {
    return {
      governments: [],
    }
  },
  created() {

  },
  mounted() {
    this.getAllAreas()
  },
  methods: {
    getAllAreas() {
      let self = this
      axios.get(APP_URL+'/api/getAllAreas')
          .then(response => {
            if (response.data.type === 'success') {
              self.governments = response.data.governments
            }
          })
          .catch(e => {
            alert(e)
          })
    },
    selectArea(area) {
      let self = this
      localStorage.setItem('selected-area', JSON.stringify(area))
      self.$parent.selectedArea = area
      self.$router.go(-1)

    }
  }
}
</script>

<style>
.nav-link.active {
  outline: none;
  border-bottom: 2px solid !important;
  padding: 4px 0px;
  border-width:0px;
}

.accordion>.card{
  border:0px;
}

.accordion>.card>.card-header{
  background-color: white;
  border-bottom:0px;
  padding-right: 12px;
}
.card {
  background-color: white;
}
.btn-link {
  font-weight: 500;
  color: black;
  text-decoration: none;
  width: 100%;
  text-align: left;
  padding: 0 0 0 9px;
}

.btn-link i {
  float: right;
}

.btn-link:hover {
  color: black;
  text-decoration: none;
}
.tab-content {
  width: 100%;
}

</style>