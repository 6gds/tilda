function getTelFromTel() {
    function success(position) {
        const latitude  = position.coords.latitude;
        const longitude = position.coords.longitude;

        const getTel = async () => {
            const response = await fetch('https://geocode-maps.yandex.ru/1.x/?apikey=0bed7c36-342d-4cda-b9cf-1d9a39b261c9&geocode=37.611347,55.760241&format=json');
            const myJson = await response.json(); //extract JSON from the http response
            const city = myJson.response.GeoObjectCollection.featureMember[0]
                .GeoObject.metaDataProperty.GeocoderMetaData.Address.Components[3].name;

            data = {
                city: city
            };

            $.ajax({
                type: "post",
                url: '/api/tel',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                dataType: "json",
                success: function (data) {
                    if (data.status === 'success'){
                        $('.contacts-link__value').text(data.data.tel);
                    }
                },
                error: function (data){
                    console.log(data);
                }
            });
        }

        getTel();
    }

    function error() {
        console.log('Невозможно получить ваше местоположение');
    }

    if (!navigator.geolocation) {
        console.log('Не поддерживается геолокация');
    } else {
        navigator.geolocation.getCurrentPosition(success, error);
    }
}

getTelFromTel();
