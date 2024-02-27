import{p as _,f as o,a as d,u as a,w as m,F as f,o as i,X as h,b as s,g as l,t as e,d as g,i as u,q as p,k as y}from"./app-7873aac9.js";import{_ as b}from"./AuthenticatedLayout-e3e47804.js";import{C as x}from"./index-711d894d.js";import"./vue.runtime.esm-bundler-b8947e2d.js";const k=s("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"},"Booking details",-1),v={class:"py-12"},w={class:"max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white"},B={class:"py-8"},D={class:"flex justify-between"},j=s("div",{class:"px-4 sm:px-0"},[s("h3",{class:"text-base font-semibold leading-7 text-gray-900"},"Booking Information"),s("p",{class:"mt-1 max-w-2xl text-sm leading-6 text-gray-500"},"Personal details and application.")],-1),N={key:0},R=["href"],V=["href"],C={class:"mt-6 border-t border-gray-100"},T={class:"divide-y divide-gray-100"},q={class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},A=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Name",-1),F={class:"mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"},I={class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},E=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Designation",-1),M={class:"mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"},P={class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},S=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Email address",-1),L={class:"mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"},U={class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},X=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Mobile",-1),z={class:"mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"},G={class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},H=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Booking for (Room Type)",-1),J={class:"mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"},K={class:"flex"},O={key:0},Q={key:1},W={key:0,class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},Y=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Lawn Booking for person",-1),Z={class:"mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"},$={class:"px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0"},ss=s("dt",{class:"text-sm font-medium leading-6 text-gray-900"},"Booking Period",-1),ts={class:"mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0"},es={role:"list",class:"divide-y divide-gray-100 rounded-md border border-gray-200"},os={class:"flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6"},is={class:"flex w-0 flex-1 items-center"},ns={class:"ml-4 flex min-w-0 flex-1 gap-2"},as=s("span",{class:"flex-shrink-0 text-gray-400"},"From",-1),ds={class:"truncate font-medium"},ls={class:"flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6"},cs={class:"flex w-0 flex-1 items-center"},rs={class:"ml-4 flex min-w-0 flex-1 gap-2"},ms=s("span",{class:"flex-shrink-0 text-gray-400"},"Till",-1),gs={class:"truncate font-medium"},xs={class:"flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6"},_s={class:"flex w-0 flex-1 items-center"},fs={class:"ml-4 flex min-w-0 flex-1 gap-2"},hs=s("span",{class:"flex-shrink-0 text-gray-400"},"ID",-1),us=["src"],ws={__name:"Show",props:{booking:Array},setup(t){let n=_(0);return(ps,c)=>(i(),o(f,null,[d(a(h),{title:"Booking Detailssss"}),d(b,null,{header:m(()=>[k]),default:m(()=>[s("div",v,[s("div",w,[s("div",B,[s("div",D,[j,t.booking.status===0?(i(),o("div",N,[s("a",{href:"/admin/update_booking/"+t.booking.id+"?status=1&rooms_assigned="+a(n),class:"cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"},"Approve",8,R),s("a",{href:"/admin/update_booking/"+t.booking.id+"?status=2",class:"ml-4 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"},"Reject",8,V)])):l("",!0)]),s("div",C,[s("dl",T,[s("div",q,[A,s("dd",F,e(t.booking.name),1)]),s("div",I,[E,s("dd",M,e(t.booking.designation_id)+" -- ("+e(t.booking.service_status)+")",1)]),s("div",P,[S,s("dd",L,e(t.booking.email),1)]),s("div",U,[X,s("dd",z,e(t.booking.mobile),1)]),s("div",G,[H,s("dd",J,[g(e(t.booking.booking_for)+" ",1),s("div",K,[g(" Rooms requested: "+e(t.booking.no_of_rooms_requested)+" --||- Assign rooms ",1),t.booking.status==0?(i(),o("div",O,[t.booking.booking_for=="Room"?u((i(),o("input",{key:0,"onUpdate:modelValue":c[0]||(c[0]=r=>y(n)?n.value=r:n=r),name:"assign_no_of_rooms",class:"border border-indigo-400 mx-4 px-1"},null,512)),[[p,a(n)]]):l("",!0)])):(i(),o("div",Q,e(t.booking.rooms_assigned),1))])])]),t.booking.lawn_person?(i(),o("div",W,[Y,s("dd",Z,e(t.booking.lawn_person),1)])):l("",!0),s("div",$,[ss,s("dd",ts,[s("ul",es,[s("li",os,[s("div",is,[d(a(x),{class:"h-5 w-5 flex-shrink-0 text-gray-400","aria-hidden":"true"}),s("div",ns,[as,s("span",ds,e(t.booking.booking_from),1)])])]),s("li",ls,[s("div",cs,[d(a(x),{class:"h-5 w-5 flex-shrink-0 text-gray-400","aria-hidden":"true"}),s("div",rs,[ms,s("span",gs,e(t.booking.booking_till),1)])])]),s("li",xs,[s("div",_s,[s("div",fs,[hs,s("img",{src:"/storage/photos/"+t.booking.police_id,alt:""},null,8,us)])])])])])])])])])])])]),_:1})],64))}};export{ws as default};