import{_ as c}from"./AuthenticatedLayout-4a4e3b56.js";import{f as a,a as l,u as m,w as r,F as d,o as i,X as h,b as e,m as _,t as s,d as o}from"./app-bde8b4ab.js";const x=e("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"},"Booking requests",-1),u={class:"bg-gray-50 min-h-screen"},g={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},v=e("h3",{class:"mt-8 mb-4 text-lg font-medium leading-6 text-gray-900 pt-8"},"Booking Requests",-1),f={class:"overflow-hidden bg-white shadow sm:rounded-md"},p={role:"list",class:"divide-y divide-gray-200"},w=["href"],y={class:"px-4 py-4 sm:px-6"},b={class:"flex items-center justify-between"},A={class:"truncate text-sm font-medium text-indigo-600"},z={class:"mt-2 sm:flex sm:justify-between"},B={class:"sm:flex"},M={class:"flex items-center text-sm text-gray-500"},V=e("svg",{class:"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor","aria-hidden":"true"},[e("path",{d:"M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z"})],-1),k={class:"mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6"},C=e("svg",{class:"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor","aria-hidden":"true"},[e("path",{"fill-rule":"evenodd",d:"M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z","clip-rule":"evenodd"})],-1),D={class:"mt-2 flex items-center text-sm text-gray-500 sm:mt-0"},H=e("svg",{class:"mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor","aria-hidden":"true"},[e("path",{"fill-rule":"evenodd",d:"M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z","clip-rule":"evenodd"})],-1),N={datetime:"2020-01-07"},E={__name:"Dashboard",props:{bookings:Array,payments:Array},setup(n){return(j,q)=>(i(),a(d,null,[l(m(h),{title:"Dashboard"}),l(c,null,{header:r(()=>[x]),default:r(()=>[e("div",u,[e("div",g,[v,e("div",f,[e("ul",p,[(i(!0),a(d,null,_(n.bookings,t=>(i(),a("li",null,[e("a",{href:"/admin/bookings/"+t.id,class:"block hover:bg-gray-50"},[e("div",y,[e("div",b,[e("p",A,s(t.name),1)]),e("div",z,[e("div",B,[e("p",M,[V,o(" "+s(t.designation_id)+" ("+s(t.service_status)+") ",1)]),e("p",k,[C,o(" "+s(t.mobile),1)])]),e("div",D,[H,e("p",null,[o(" Received on "),e("time",N,s(t.created_at),1)])])])])],8,w)]))),256))])])])])]),_:1})],64))}};export{E as default};
