import{v as l,c as m,w as t,o as d,a,u as o,X as c,b as e,d as u,n as p,e as f}from"./app-17f57785.js";import{_}from"./GuestLayout-b8acdcc7.js";import{_ as w,a as b,b as h}from"./TextInput-cee5b39e.js";import{P as x}from"./PrimaryButton-4f1ba687.js";import"./_plugin-vue_export-helper-c27b6911.js";const g=e("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),v=["onSubmit"],y={class:"flex justify-end mt-4"},S={__name:"ConfirmPassword",setup(P){const s=l({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(V,r)=>(d(),m(_,null,{default:t(()=>[a(o(c),{title:"Confirm Password"}),g,e("form",{onSubmit:f(i,["prevent"])},[e("div",null,[a(w,{for:"password",value:"Password"}),a(b,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":r[0]||(r[0]=n=>o(s).password=n),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),a(h,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),e("div",y,[a(x,{class:p(["ml-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:t(()=>[u(" Confirm ")]),_:1},8,["class","disabled"])])],40,v)]),_:1}))}};export{S as default};
