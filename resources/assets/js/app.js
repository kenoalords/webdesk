
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('approve-payment', require('./components/ApprovePayment.vue'));

const app = new Vue({
    el: '#app'
});

import slick from "slick-carousel";

$('.slick-js').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 3000,
	responsive: [
	{
		breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 2
			}
	},
	{
		breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
	}
	]
});

if( $('.signup-form').length > 0 ){
	let total = 0;
	let packageCost = 0;
	let monthlyCost = 0;

	$('body').on('change', '#packages', (e)=>{
		e.preventDefault();
		const id = $('#packages').val();
		axios.get('/package/'+id).then((res)=>{
			packageCost = res.data.setup_cost;
			monthlyCost = res.data.monthly_cost
			let count = parseInt($('#renew_interval').val());
			let monthly_cost = getMonthlyCost(count, monthlyCost);
			const total = packageCost + monthly_cost;
			$('.total-amount').html(total);
		});
	}).bind(packageCost, monthlyCost);	

	$('body').on('change', '#renew_interval', (e)=>{
		e.preventDefault();
		const count = parseInt($('#renew_interval').val());
		let monthly_cost = getMonthlyCost(count, monthlyCost);		
		const total = packageCost + monthly_cost;
		$('.total-amount').html(total); 
	}).bind(packageCost, monthlyCost);
}

function getMonthlyCost(count, monthlyCost){
	let monthly_cost = 0;
	switch (count) {
			case 12:
				monthly_cost = monthlyCost * 11;
				break;
			case 6:
				monthly_cost = monthlyCost * 5;
				break;
			default:
				monthly_cost = 0;
				break;
		}
	return monthly_cost;
}















