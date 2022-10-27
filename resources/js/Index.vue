<template>
    <CardComponent>
        <template v-slot:body>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputValue" placeholder="Digite o nome"
                                v-model="companyName">
                            <label for="floatingInputValue">Buscar</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Selecione o estado desejado" @change="changeState($event)">
                                <option selected>Todos</option>
                                <option v-for="state in states" :value="state.id">{{ state.name }}</option>
                            </select>
                            <label for="floatingSelect">Estado</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Selecione a cidade desejada">
                                <option selected>Todos</option>
                                <option v-for="city in cities" :value="city.id">{{ city.name }}</option>
                            </select>
                            <label for="floatingSelect">Cidade</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" v-for="company in filteredCompanies" :key="company.id">
                    <ItemComponent :id="company.id" :name="company.company" :description="company.description"
                        :phone="company.phone" :email="company.email">
                    </ItemComponent>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center mt-5">
                    <button :disabled="last_page === page" @click="changePage(1)" class="btn btn-success">Carregar
                        mais</button>
                </div>
            </div>
        </template>
    </CardComponent>
</template>

<script>
import axios from 'axios';

import CardComponent from './components/CardComponent.vue';
import ItemComponent from './components/ItemComponent.vue';

export default {
    components: { CardComponent, ItemComponent },
    data() {
        return {
            companies: [],
            states: [],
            cities: [],
            state: 0,
            companyName: "",
            page: 1,
            last_page: null
        };
    },
    computed: {
        filteredCompanies: function () {
            var companies = this.companies;
            var companyName = this.companyName;

            if (!companyName) {
                return companies;
            }

            companyName = companyName.trim().toLowerCase();

            companies = companies.filter(function (item) {
                if (item.company.toLowerCase().indexOf(companyName) !== -1) {
                    return item;
                }
            })

            return companies;
        }
    },
    methods: {
        getCompanies() {
            axios
                .get("/api/enterprises?page=" + this.page)
                .then(response => {
                    console.log(response.data.data);
                    this.companies = response.data.data
                    this.last_page = response.data.meta.last_page
                })
                .catch(error => console.log(error));
        },
        getStates() {
            axios
                .get("/api/states")
                .then(response => {
                    console.log(response.data.data);
                    this.states = response.data.data
                })
                .catch(error => console.log(error));
        },
        getCities() {
            axios
                .get("/api/cities/" + this.state)
                .then(response => {
                    console.log(response.data.data);
                    this.cities = response.data.data
                })
                .catch(error => console.log(error));
        },
        changePage(page) {
            this.page = this.page + page;
            this.getCompanies();
        },
        changeState(state) {
            this.state = state.target.value;
            this.getCities();
        }
    },
    mounted() {
        this.getCompanies();
        this.getStates();
        this.getCities();
    }
}
</script>