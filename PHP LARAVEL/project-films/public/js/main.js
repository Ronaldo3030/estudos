function criaCard(containerFilmes, text, image){
    let div = document.createElement("div")
    div.classList.add('glide__slide')
    let p = document.createElement("p")
    p.classList.add('sub-title')
    let img = document.createElement("img")
    img.setAttribute('src', 'https://image.tmdb.org/t/p/w500/'+image)
    containerFilmes.appendChild(div)
    div.appendChild(img)
    div.appendChild(p)
    p.innerText = text
}