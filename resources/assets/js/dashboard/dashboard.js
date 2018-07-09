import Datepicker from 'vuejs-datepicker';


Vue.component('task-list', require('../components/Task-list.vue'));


const app = new Vue({
    el: '#app'
});

const date_picker = new Vue({
	el: '#date_picker',
	components: {
			Datepicker
	},
	data: {
			date: new Date()
	}
});
