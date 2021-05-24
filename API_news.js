
const apikey_news = '3840884f7e17432787ec144bade5c59a';

function search(event){
    event.preventDefault();
    
    const news_input = document.querySelector('#key_news');
    const news_value = encodeURIComponent(news_input.value);
    console.log('Ricerco: ' + news_value);
    rest_url='https://newsapi.org/v2/everything?q=' +news_value + '&language=it&apiKey=' + apikey_news;
    console.log('url: ' + rest_url);
    
    fetch(rest_url).then(onResponse).then(onJsonNews);
}
  
const form = document.querySelector('form');
form.addEventListener('submit', search);
  

function onResponse(resp){
    console.log(resp);
    return resp.json();
}

function onJsonNews(json) {

    console.log(json);

    const sez = document.querySelector('.articoli');
    sez.innerHTML='';

    const result = json.articles;
    let num_result = result.length;
    if(num_result > 3) num_result = 3;

    for(let i = 0; i < num_result; i++){
        const data_article = result[i];
        const art_title = data_article.title;
        const art_img = data_article.urlToImage;       
        const art_des = data_article.description;
        const art_url = data_article.url;
        

        const article = document.createElement("div");
        article.classList.add("article");

        const img = document.createElement("img");
        img.src = art_img;
        const title = document.createElement("h3");
        title.textContent = art_title;
        const content = document.createElement("p");
        content.textContent = art_des;
        const url = document.createElement("a")
        url.textContent = 'Leggi tutto';
        url.href = art_url;


        article.appendChild(img);
        article.appendChild(title);
        article.appendChild(content);
        article.appendChild(url);
        
        sez.appendChild(article);

    }
}
