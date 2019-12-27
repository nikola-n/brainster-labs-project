console.log('file loaded');


function setActive(type) {
    console.log(type);

    //select active item to remove his 'active' class
    let myActiveItem = document.querySelector('.academies li.active');

    //make sure that you have found active li
    if (myActiveItem) {
        myActiveItem.classList.remove('active');
    }

    //select list items for further use in switch case
    let myListItems = document.querySelectorAll('.academies li');

    //select all cards 
    let myCards = document.querySelectorAll('.card-holder'); //sam ja dodadavas card-holder


    for (let i = 0; i < myCards.length; i++) {
        const card = myCards[i];
        card.style.display = 'none';
    }




    //execute different code depening od type parameter
    switch (type) {

        case 'marketing':
            myListItems[0].classList.add('active');

            let myMarketingCards = document.querySelectorAll('.card-holder.marketing');
            for (let i = 0; i < myMarketingCards.length; i++) {
                const card = myMarketingCards[i];
                card.style.display = 'block';
            }
            break;
        case 'developer':
            myListItems[1].classList.add('active');

            let myDevelopmentCards = document.querySelectorAll('.card-holder.developer');
            for (let i = 0; i < myDevelopmentCards.length; i++) {
                const card = myDevelopmentCards[i];
                card.style.display = 'block';

            }
            break;
        case 'design':
            myListItems[2].classList.add('active');

            let myDesignCards = document.querySelectorAll('.card-holder.design');
            for (let i = 0; i < myDesignCards.length; i++) {
                const card = myDesignCards[i];
                card.style.display = 'block';
            }
            break;

        default:
            break;
    }
}



function showSidebar() {
    let mySidebar = document.querySelector('.sidebar');
    mySidebar.style.width = '310px';

}

function closeSidebar() {
    let mySidebar = document.querySelector('.sidebar');
    mySidebar.style.width = '0px';
}


//   function dropdownMenu1565Set(val){
// 	if(val.innerHTML!=""){$('#dropdownMenu1565').val(val.innerHTML);$('#dropdownMenu1565').html(val.innerHTML);}
// 	else{$('#dropdownMenu165').val('');$('#dropdownMenu165').html('Select Client');}
// }



function myFunction() {
    location.replace("https://www.brainster.io/marketpreneurs");
}

function design() {
    location.replace("https://www.brainster.io/design");
}

function myDeveloper() {
    location.replace("http://codepreneurs.co/");
}