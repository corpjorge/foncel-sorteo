<template>
    <div class="container">
        <img src="assets/img/concurso/banner.jpg" alt="" style="width: 100%;"/>
        <div class="p-4 p-md-5 mb-4 text-white  bg-dark">
            <div class="col px-0">
                <p class="lead" style="font-size: 2.25rem; font-weight: 400; line-height: 38px;"> Responde las preguntas para poder participar en el sorteo.</p>
            </div>
        </div>

        <form>
            <section class="pricing-section pricing-style-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                            <div class="section-title text-center mb-60">
                                <p style="font-size: 18px;">{{question.title}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div v-for="(answers, index) in question.answers" class="col-6 themed-grid-col">
                            <div class="form-check">
                                <template v-if="answers.type === 'radio'">
                                    <input class="form-check-input" :type="answers.type" :id="answers.id" :value="answers.title" v-model="answer" @click="select" required>
                                    <label class="form-check-label" :for="answers.id">{{answers.title}}</label>
                                </template>
                                <template v-if="answers.type === 'checkbox'">
                                    <input class="form-check-input" :type="answers.type" :id="answers.id" :value="answers.title" v-model="answer" @click="select" required>
                                    <label class="form-check-label" :for="answers.id">{{answers.title}}</label>
                                </template>
                                <template v-if="answers.type === 'number'">
                                    <input class="form-control" :type="answers.type" :id="answers.id" :placeholder="answers.title" v-model="answer" @click="select">
                                </template>
                                <template v-if="answers.type === 'textarea'">
                                    <textarea class="form-control" :id="answers.id" :placeholder="answers.title" rows="3" v-model="answer" @click="select"></textarea>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <div class="progress">
            <div class="progress-bar" role="progressbar" :style="'width:'+progress+'%'" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="d-grid gap-2" style="padding: 11px; margin: 8px;">
            <button @click="sendResponses" class="button button-lg radius-10 btn-block" type="button" :disabled="disabled">Siguiente</button>
        </div>

        <div class="modal fade show slide-in-top" :class="{ modalActive: isActive }" id="exampleModal" tabindex="-1"
             aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-success">
                        <h5 class="modal-title" id="exampleModalLabel">Felicitaciones</h5>
                    </div>
                    <div class="modal-body">
                        Has respondido correctamente las preguntas, ahora entra a participar en el sorteo e intenta ganar
                    </div>
                    <div class="modal-footer">
                        <button @click="participate" type="button" class="btn btn-success btn-group">Ir a participar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Questions",
    data() {
        return {
            id: 1,
            question: {},
            progress: 0,
            answer: [],
            disabled: true,
            show: false,
            result: null,
            isActive: false,
            isActive_lost: false
        }
    },
    created() {
        this.getQuestions()
    },
    methods: {
        select() {
            this.disabled = false;
        },
        getQuestions() {

            if (this.id === 16) {
                this.isActive = true
                return;
            }

            axios.get('/question/'+this.id).then(response => {
                this.question = response.data
            })
        },
        sendResponses() {
            if (!this.answer){
                return;
            }

            axios.post('/answer/'+this.id, {answer : this.answer})
            .then(response => {
                this.id = this.id+1;
                if(this.progress === 0){
                    this.progress = 5
                }
                this.disabled = true;
                this.progress = this.progress+5
                if (this.id === 14){
                    this.disabled = false;
                }
                this.answer = [];
                this.getQuestions();
            })
        },
        participate() {
            window.location.assign("/slots")
        },
    }
}
</script>

<style scoped>
.modalActive {
    display: block;
}

.slide-in-top {
    background-color: #0000005e;
    -webkit-animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

.slide-in-top-lost {
    background-color: #0000005e;
    -webkit-animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@-webkit-keyframes slide-in-top {
    0% {
        -webkit-transform: translateY(-1000px);
        transform: translateY(-1000px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}
@keyframes slide-in-top {
    0% {
        -webkit-transform: translateY(-1000px);
        transform: translateY(-1000px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}

@media only screen and (max-width: 600px) {
    .col-6 {
        width: 100%;
    }
}


</style>
