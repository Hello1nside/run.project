const example = new Vue({
	el: '#example',
	delimiters: ['${', '}'],
	http: {
		emulateJSON: true,
		emulateHTTP: true
	},
	data: {
		form: {
			name: 'Test',
			email: 'ivzhen4@gmail.com',
			message: 'Test message with attachments',
			file: null
		}
	},
	computed: {},
	mounted: function () {},
	methods: {
		onFileChanged(){
			this.form.file = event.target.files[0];
			console.log(this.form.file);
		},
		send(){
			for(let i in this.form) {
				if (!this.form[i]) {
					alert('Some field is empty');
					return;
				}
			}
			const formData = new FormData();
			formData.append('file', this.form.file);
			this.$http.post('/api/send_mail', this.form).then((resp) => {

			})
		}
	},
	created: function () {
		window.onscroll = function() {
			console.log('123');
		}
	}
});