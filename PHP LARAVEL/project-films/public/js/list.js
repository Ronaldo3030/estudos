const containerFilmes = document.getElementById('container-filmes')

const base_url = 'https://api.themoviedb.org/3';
let type = '/movie/popular'
const key = '?api_key=31a58005ba599d577a43d7260266cd6c'
const image_url = 'https://image.tmdb.org/t/p/w1280'
window.onload = () => {
    const url = base_url + type + key
    fetch(url)
        .then(response => {
            return response.json()
        }).then(data => {
            data.results.forEach(result => {
                console.log(result)
                criaCard(containerFilmes, result.id, result.original_title, result.poster_path, result.backdrop_path, result.overview)
            })
            console.log(data.results)
        }).catch(err => {
            console.log("ERRO: " + err)
        })
}