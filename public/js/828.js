(self.webpackChunk=self.webpackChunk||[]).push([[828],{704:(e,t,n)=>{(t=n(645)(!1)).push([e.id,"\n.modalActive[data-v-03b54431] {\n    display: block;\n}\n.slide-in-top[data-v-03b54431] {\n    background-color: #0000005e;\n    -webkit-animation: slide-in-top-03b54431 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;\n    animation: slide-in-top-03b54431 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;\n}\n.slide-in-top-lost[data-v-03b54431] {\n    background-color: #0000005e;\n    -webkit-animation: slide-in-top-03b54431 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;\n    animation: slide-in-top-03b54431 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;\n}\n@-webkit-keyframes slide-in-top-03b54431 {\n0% {\n        -webkit-transform: translateY(-1000px);\n        transform: translateY(-1000px);\n        opacity: 0;\n}\n100% {\n        -webkit-transform: translateY(0);\n        transform: translateY(0);\n        opacity: 1;\n}\n}\n@keyframes slide-in-top-03b54431 {\n0% {\n        -webkit-transform: translateY(-1000px);\n        transform: translateY(-1000px);\n        opacity: 0;\n}\n100% {\n        -webkit-transform: translateY(0);\n        transform: translateY(0);\n        opacity: 1;\n}\n}\n@media only screen and (max-width: 600px) {\n.col-6[data-v-03b54431] {\n        width: 100%;\n}\n}\n\n\n",""]),e.exports=t},645:e=>{"use strict";e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var n=function(e,t){var n=e[1]||"",a=e[3];if(!a)return n;if(t&&"function"==typeof btoa){var i=(r=a,s=btoa(unescape(encodeURIComponent(JSON.stringify(r)))),l="sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(s),"/*# ".concat(l," */")),o=a.sources.map((function(e){return"/*# sourceURL=".concat(a.sourceRoot||"").concat(e," */")}));return[n].concat(o).concat([i]).join("\n")}var r,s,l;return[n].join("\n")}(t,e);return t[2]?"@media ".concat(t[2]," {").concat(n,"}"):n})).join("")},t.i=function(e,n,a){"string"==typeof e&&(e=[[null,e,""]]);var i={};if(a)for(var o=0;o<this.length;o++){var r=this[o][0];null!=r&&(i[r]=!0)}for(var s=0;s<e.length;s++){var l=[].concat(e[s]);a&&i[l[0]]||(n&&(l[2]?l[2]="".concat(n," and ").concat(l[2]):l[2]=n),t.push(l))}},t}},379:(e,t,n)=>{"use strict";var a,i=function(){return void 0===a&&(a=Boolean(window&&document&&document.all&&!window.atob)),a},o=function(){var e={};return function(t){if(void 0===e[t]){var n=document.querySelector(t);if(window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(e){n=null}e[t]=n}return e[t]}}(),r=[];function s(e){for(var t=-1,n=0;n<r.length;n++)if(r[n].identifier===e){t=n;break}return t}function l(e,t){for(var n={},a=[],i=0;i<e.length;i++){var o=e[i],l=t.base?o[0]+t.base:o[0],c=n[l]||0,d="".concat(l," ").concat(c);n[l]=c+1;var u=s(d),p={css:o[1],media:o[2],sourceMap:o[3]};-1!==u?(r[u].references++,r[u].updater(p)):r.push({identifier:d,updater:v(p,t),references:1}),a.push(d)}return a}function c(e){var t=document.createElement("style"),a=e.attributes||{};if(void 0===a.nonce){var i=n.nc;i&&(a.nonce=i)}if(Object.keys(a).forEach((function(e){t.setAttribute(e,a[e])})),"function"==typeof e.insert)e.insert(t);else{var r=o(e.insert||"head");if(!r)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");r.appendChild(t)}return t}var d,u=(d=[],function(e,t){return d[e]=t,d.filter(Boolean).join("\n")});function p(e,t,n,a){var i=n?"":a.media?"@media ".concat(a.media," {").concat(a.css,"}"):a.css;if(e.styleSheet)e.styleSheet.cssText=u(t,i);else{var o=document.createTextNode(i),r=e.childNodes;r[t]&&e.removeChild(r[t]),r.length?e.insertBefore(o,r[t]):e.appendChild(o)}}function f(e,t,n){var a=n.css,i=n.media,o=n.sourceMap;if(i?e.setAttribute("media",i):e.removeAttribute("media"),o&&"undefined"!=typeof btoa&&(a+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o))))," */")),e.styleSheet)e.styleSheet.cssText=a;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(a))}}var m=null,b=0;function v(e,t){var n,a,i;if(t.singleton){var o=b++;n=m||(m=c(t)),a=p.bind(null,n,o,!1),i=p.bind(null,n,o,!0)}else n=c(t),a=f.bind(null,n,t),i=function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(n)};return a(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap)return;a(e=t)}else i()}}e.exports=function(e,t){(t=t||{}).singleton||"boolean"==typeof t.singleton||(t.singleton=i());var n=l(e=e||[],t);return function(e){if(e=e||[],"[object Array]"===Object.prototype.toString.call(e)){for(var a=0;a<n.length;a++){var i=s(n[a]);r[i].references--}for(var o=l(e,t),c=0;c<n.length;c++){var d=s(n[c]);0===r[d].references&&(r[d].updater(),r.splice(d,1))}n=o}}}},828:(e,t,n)=>{"use strict";n.r(t),n.d(t,{default:()=>H});var a=n(166),i=(0,a.HX)("data-v-03b54431");(0,a.dD)("data-v-03b54431");var o={class:"container"},r=(0,a.Wm)("img",{src:"assets/img/concurso/banner.jpg",alt:"",style:{width:"100%"}},null,-1),s=(0,a.Wm)("div",{class:"p-4 p-md-5 mb-4 text-white  bg-dark"},[(0,a.Wm)("div",{class:"col px-0"},[(0,a.Wm)("p",{class:"lead",style:{"font-size":"2.25rem","font-weight":"400","line-height":"38px"}}," Responde las preguntas para poder participar en el sorteo.")])],-1),l={class:"pricing-section pricing-style-1"},c={class:"container"},d={class:"row justify-content-center"},u={class:"col-xxl-5 col-xl-5 col-lg-7 col-md-10"},p={class:"section-title text-center mb-60"},f={style:{"font-size":"18px"}},m={class:"row mb-3"},b={class:"col-6 themed-grid-col"},v={class:"form-check"},h={class:"progress"},y={class:"d-grid gap-2",style:{padding:"11px",margin:"8px"}},g={class:"modal-dialog"},w={class:"modal-content"},k=(0,a.Wm)("div",{class:"modal-header alert alert-success"},[(0,a.Wm)("h5",{class:"modal-title",id:"exampleModalLabel"},"Felicitaciones")],-1),x=(0,a.Wm)("div",{class:"modal-body"}," Has respondido correctamente las preguntas, ahora entra a participar en el sorteo e intenta ganar ",-1),W={class:"modal-footer"};(0,a.Cn)();var j=i((function(e,t,n,i,j,C){return(0,a.wg)(),(0,a.j4)("div",o,[r,s,(0,a.Wm)("form",null,[(0,a.Wm)("section",l,[(0,a.Wm)("div",c,[(0,a.Wm)("div",d,[(0,a.Wm)("div",u,[(0,a.Wm)("div",p,[(0,a.Wm)("p",f,(0,a.zw)(j.question.title),1)])])]),(0,a.Wm)("div",m,[((0,a.wg)(!0),(0,a.j4)(a.HY,null,(0,a.Ko)(j.question.answers,(function(e,n){return(0,a.wg)(),(0,a.j4)("div",b,[(0,a.Wm)("div",v,["radio"===e.type?((0,a.wg)(),(0,a.j4)(a.HY,{key:0},[(0,a.wy)((0,a.Wm)("input",{class:"form-check-input",type:e.type,id:e.id,value:e.title,"onUpdate:modelValue":t[1]||(t[1]=function(e){return j.answer=e}),onClick:t[2]||(t[2]=function(){return C.select&&C.select.apply(C,arguments)}),required:""},null,8,["type","id","value"]),[[a.YZ,j.answer]]),(0,a.Wm)("label",{class:"form-check-label",for:e.id},(0,a.zw)(e.title),9,["for"])],64)):(0,a.kq)("",!0),"checkbox"===e.type?((0,a.wg)(),(0,a.j4)(a.HY,{key:1},[(0,a.wy)((0,a.Wm)("input",{class:"form-check-input",type:e.type,id:e.id,value:e.title,"onUpdate:modelValue":t[3]||(t[3]=function(e){return j.answer=e}),onClick:t[4]||(t[4]=function(){return C.select&&C.select.apply(C,arguments)}),required:""},null,8,["type","id","value"]),[[a.YZ,j.answer]]),(0,a.Wm)("label",{class:"form-check-label",for:e.id},(0,a.zw)(e.title),9,["for"])],64)):(0,a.kq)("",!0),"number"===e.type?(0,a.wy)(((0,a.wg)(),(0,a.j4)("input",{key:2,class:"form-control",type:e.type,id:e.id,placeholder:e.title,"onUpdate:modelValue":t[5]||(t[5]=function(e){return j.answer=e}),onClick:t[6]||(t[6]=function(){return C.select&&C.select.apply(C,arguments)})},null,8,["type","id","placeholder"])),[[a.YZ,j.answer]]):(0,a.kq)("",!0),"textarea"===e.type?(0,a.wy)(((0,a.wg)(),(0,a.j4)("textarea",{key:3,class:"form-control",id:e.id,placeholder:e.title,rows:"3","onUpdate:modelValue":t[7]||(t[7]=function(e){return j.answer=e}),onClick:t[8]||(t[8]=function(){return C.select&&C.select.apply(C,arguments)})},null,8,["id","placeholder"])),[[a.nr,j.answer]]):(0,a.kq)("",!0)])])})),256))])])])]),(0,a.Wm)("div",h,[(0,a.Wm)("div",{class:"progress-bar",role:"progressbar",style:"width:"+j.progress+"%","aria-valuenow":"25","aria-valuemin":"0","aria-valuemax":"100"},null,4)]),(0,a.Wm)("div",y,[(0,a.Wm)("button",{onClick:t[9]||(t[9]=function(){return C.sendResponses&&C.sendResponses.apply(C,arguments)}),class:"button button-lg radius-10 btn-block",type:"button",disabled:j.disabled},"Siguiente",8,["disabled"])]),(0,a.Wm)("div",{class:["modal fade show slide-in-top",{modalActive:j.isActive}],id:"exampleModal",tabindex:"-1","aria-labelledby":"exampleModalLabel","aria-modal":"true",role:"dialog"},[(0,a.Wm)("div",g,[(0,a.Wm)("div",w,[k,x,(0,a.Wm)("div",W,[(0,a.Wm)("button",{onClick:t[10]||(t[10]=function(){return C.participate&&C.participate.apply(C,arguments)}),type:"button",class:"btn btn-success btn-group"},"Ir a participar ")])])])],2)])})),C=n(669),S=n.n(C);function Y(e){return(Y="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}const q={name:"Questions",data:function(){return{id:1,question:{},progress:0,answer:[],disabled:!0,show:!1,result:null,isActive:!1,isActive_lost:!1}},created:function(){this.getQuestions()},methods:{select:function(){this.disabled=!1},getQuestions:function(){var e=this;16!==this.id?S().get("/question/"+this.id).then((function(t){e.question=t.data})):this.isActive=!0},sendResponses:function(){var e=this;15!==this.id&&"object"===Y(this.answer)&&0===Object.keys(this.answer).length||S().post("/answer/"+this.id,{answer:this.answer}).then((function(t){e.id=e.id+1,0===e.progress&&(e.progress=5),e.disabled=!0,e.progress=e.progress+5,15===e.id&&(e.disabled=!1),e.answer=[],e.getQuestions()}))},participate:function(){window.location.assign("/slots")}}};var M=n(379),A=n.n(M),R=n(704),z=n.n(R),U={insert:"head",singleton:!1};A()(z(),U);z().locals;q.render=j,q.__scopeId="data-v-03b54431";const H=q}}]);