require('./bootstrap');

require('alpinejs');



let user_links = document.querySelectorAll('.user-link');
user_links.forEach(user_link => {
    user_link.addEventListener('mousedown',(event)=>{

        let link_id = user_link.dataset.linkId ;
        let link_url = user_link.getAttribute("href");

        console.log(link_id);
        console.log(link_url);
        axios.post(`/visit/${link_id}`,{
            link:link_url
        })
        .then(response => console.log('response:',response))
        .catch(error => console.error('response:',error));

    });
});


