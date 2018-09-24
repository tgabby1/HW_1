var profileData = new Vue({
    el: "#profile",
    data: {
        person: {
            "gender": "",
            "name": {
                "title": "",
                "first": "",
                "last": ""
            },
            "location": {
                "street": "",
                "city": "",
                "state": "",
                "postcode": null,
                "coordinates": {
                    "latitude": "",
                    "longitude": ""
                },
                "timezone": {
                    "offset": "",
                    "description": ""
                }
            },
            "email": "",
            "login": {
                "uuid": "",
                "username": "",
                "password": "",
                "salt": "",
                "md5": "",
                "sha1": "",
                "sha256": ""
            },
            "dob": {
                "date": "",
                "age": ""
            },
            "registered": {
                "date": "",
                "age": ""
            },
            "phone": "",
            "cell": "",
            "id": {
                "name": "",
                "value": ""
            },
            "picture": {
                "large": "",
                "medium": "",
                "thumbnail": ""
            },
            "nat": ""
        }

    },
    computed: {
        pretty_current_age: function() {
            return moment().diff(this.person.dob.date, 'years');
        },
        pretty_date_of_birth: function() {
            return moment(this.person.dob.date).format('years ');
        }
    },

    methods: {
        fetchPersonData() {
            fetch('https://randomuser.me/api/')
                .then(response => response.json())
                .then(json => {
                    profileData.person = json.results[0]
                })
                .catch(function(err) {
                    console.log('INFO FETCH ERROR');
                    console.log(err);
                })
        },
        pretty_date: function(d) {
            return moment(d).format('l')
        },
        loadButton() {
            fetch('https://randomuser.me/api/')
                .then(response => response.json())
                .then(json => {
                    profileData.person = json.results[0]
                })
                .catch(function(err) {
                    console.log('INFO FETCH ERROR');
                    console.log(err);
                })
        }
      },
        created() {
            this.fetchPersonData();
        }
    })
