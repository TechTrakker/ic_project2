import{createStore}from"@stencil/store";const store=createStore({type:"default",code:"",message:"",data:{status:0,type:"",http_status:""},additional_errors:[],dismissible:!1},((e,t)=>JSON.stringify(e)!==JSON.stringify(t))),{state:state,onChange:onChange,on:on,dispose:dispose,forceUpdate:forceUpdate}=store;export default state;export{state,onChange,on,dispose,forceUpdate};