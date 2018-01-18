
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

Number.prototype.formatMoney = function(places, symbol, thousand, decimal) {
	places = !isNaN(places = Math.abs(places)) ? places : 0;
	symbol = symbol !== undefined ? symbol : "₦";
	thousand = thousand || ",";
	decimal = decimal || ".";
	var number = this, 
	    negative = number < 0 ? "-" : "",
	    i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + "",
	    j = (j = i.length) > 3 ? j % 3 : 0;
	return symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "₦1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
};

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
// Slick JS single carousel
$('.single-slick-js').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 3000,
});

if( $('.signup-form').length > 0 ){
	let total = 0;
	let packageCost = 0;
	let monthlyCost = 0;
	let hasLogo = false;
	const logoCost = $('#include_logo').data('cost');

	$('#packages').on('change', (e)=>{
		e.preventDefault();
		total = 0;
		const id = $('#packages').val();
		const get = fetchPackageDetails(id).then((res)=>{
			packageCost = res.setup_cost;
			monthlyCost = res.monthly_cost
			let count = parseInt($('#renew_interval').val());
			let monthly_cost = getMonthlyCost(count, monthlyCost);
			total = packageCost + monthly_cost;
			if ( hasLogo ){
				total += logoCost;
			}
			$('.total-amount').html(total.formatMoney());
		});		
	}).bind(packageCost, monthlyCost, total, hasLogo, logoCost);	

	$('body').on('change', '#renew_interval', (e)=>{
		total = 0;
		e.preventDefault();
		const count = parseInt($('#renew_interval').val());
		let monthly_cost = getMonthlyCost(count, monthlyCost);		
		total = packageCost + monthly_cost;
		if ( hasLogo ){
			total += logoCost;
		}
		$('.total-amount').html(total.formatMoney()); 
	}).bind(packageCost, monthlyCost, total, hasLogo, logoCost);

	$('#include_logo').on('change', (e)=>{
		var cost = $('#include_logo').data('cost');
		if ( document.querySelector('#include_logo').checked ) {
			total += cost;
			hasLogo = true;
			$('.total-amount').html(total.formatMoney());
		} else {
			total -= cost;
			hasLogo = false;
			$('.total-amount').html(total.formatMoney());
		}
		// const count = parseInt($('#renew_interval').val());
		// let monthly_cost = getMonthlyCost(count, monthlyCost);		
		// const total = packageCost + monthly_cost;
		// $('.total-amount').html(total.formatMoney()); 
	}).bind(packageCost, monthlyCost, total, hasLogo, logoCost);

	// console.log($('#packages').val())
	if( $('#packages').val() != 0){
		$('#packages').trigger('change');
	}

	if ( document.querySelector('#include_logo').checked ) {
		$('#include_logo').trigger('change');
	}
}

function fetchPackage(id){
	return new Promise((resolve, error) => {
		axios.get('/package/'+id).then((res)=>{
			resolve( res.data );
		});
	})
}

async function fetchPackageDetails(id){
	try {
		const details = await fetchPackage(id);
		return details;
	} catch (error){
		console.log(error);
	}
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

















