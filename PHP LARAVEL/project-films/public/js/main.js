function criaCard(containerFilmes, text, image, bigImage, description){
    let div = document.createElement("div")
    div.classList.add('glide__slide')
    div.setAttribute('data-bs-toggle', 'modal')
    div.setAttribute('data-bs-target', '#exampleModal')
    div.setAttribute('data-bs-name', text)
    div.setAttribute('data-bs-image', 'https://image.tmdb.org/t/p/w500/'+bigImage)
    div.setAttribute('data-bs-description', description)
    let p = document.createElement("p")
    p.classList.add('sub-title')
    let img = document.createElement("img")
    img.setAttribute('src', 'https://image.tmdb.org/t/p/w500/'+image)
    containerFilmes.appendChild(div)
    div.appendChild(img)
    div.appendChild(p)
    p.innerText = text
}