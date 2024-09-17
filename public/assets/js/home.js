// Date Picker

const submitReservationBtn = document.querySelector('#submitReservationEngine');
const ReservationForm = document.querySelector('#ReservationEngine');
let QueryString = makeQuery({});

submitReservationBtn.addEventListener('click', function(){
    QueryString.adults = Number(ReservationForm.adults.value);
    QueryString.children = Number(ReservationForm.minors.value);

    ReservationForm.reset();
    window.open(linkReservationEngine(QueryString));
})

initDatePicker();

function linkReservationEngine(query){
    return 'https://hotels.cloudbeds.com/reservation/Y4Crx5';
}

function makeQuery(){
    const BASE_URL = 'https://direct-book.com/properties/HotelarboreaDirect';

    return {
        checkInDate: '',
        checkOutDate: '',
        adults: 0,
        infants: 0,
        children: 0,
        locale: 'es',
        currency: 'MXN', 
    }
}

function initDatePicker(){
    const dateInput = document.querySelector('#dateInput');
    const checkin = document.querySelector('#checkin');
    const checkout = document.querySelector('#checkout');
    let dates = [];

    const pickDates = new DateRangePicker(dateInput, {
        inputs: [checkin, checkout],
        format: 'y-m-d',
        language: 'es'
    });

    checkin.addEventListener('hide', (e) => {
        QueryString.checkInDate = e.target.value;
        dates = pickDates.getDates('D, d M yyyy');

        checkin.value = dates[0];
        checkout.value = dates[1];

        console.log(dates);
    });
    checkout.addEventListener('changeDate', (e) => {
        QueryString.checkOutDate = e.target.value;
    })

}

// Counter

function setCount(input ,value){
    var counter = document.querySelector(input);
    var result = Number(counter.value) + Number(value);
    if(result >= 0 ) {
        counter.value = result;
    } else { return null;}
}