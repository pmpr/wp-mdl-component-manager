/*! For license information please see purchase_multistep.GAoHvB_df.js.LICENSE.txt */
!function(){const e=PRHelper.getHook(),t=PRHelper.getHTML(),n=PRHelper.getType(),r=PRHelper.getFormat(),a=PRHelper.getSetting(),i=t.getElement(".pr-multistep-wrap"),o=t.getElement('[name="order_request_domain"]');function s(){let e=!1,a=t.getValue('[name="order_request_domain"]');if(n.isEmpty(a))e="select_request_domain";else{let n=t.getElement(`[name="order_request_${a}"]`);if(t.isElement(n))switch(a){case"new_domain":(function(e){let t=!1,n="https://";if(r.isURL(n+e)){let r=e.match(/www\.(.*)$/);r&&void 0!==r[1]&&(e=r[1]),t=new URL(n+e).host}return t})(t.getValue(n))||(e="domain_is_not_valid");break;case"prev_domains":t.getValue(n)||(e="select_domain")}else e="request_domain_not_valid"}return e}t.isElement(o)&&e.on("change",(e=>{const n=t.getTarget(e),r=t.getElement("#order_request_new_domain"),a=t.getElement("#order_request_new_domain_title"),i=t.getElement("#order_request_prev_domains");switch(t.getValue(n)){case"new_domain":t.hide(t.getParent(i)),t.show(t.getParent(r)),t.show(t.getParent(a));break;case"prev_domains":t.hide(t.getParent(a)),t.hide(t.getParent(r)),t.show(t.getParent(i))}}),o),e.addFilter("multistep_can_goto_next_step",((e,r)=>{if(!0===e){let i=!1;switch(r.getCurrentStepName()){case"choice_ownership":let e=t.getElement("[name=order_request_type]",r.getElement());n.isEmpty(t.getValue(e))&&(i="check_order_type");break;case"choice_domain":i=s()}i&&(e=a.getOption(`errors.${i}`,!1))}return e})),e.addAction(`multistep_form_${t.getAttribute(i,"id")}_submitted`,(async(e,t)=>{}))}();