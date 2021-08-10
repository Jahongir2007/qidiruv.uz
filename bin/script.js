// JavaScript Document
let resultsList = document.getElementById('resultsList');
let searchForm = document.getElementById('searchForm');
let searchInput = document.getElementById('searchInput');


searchForm.addEventListener('submit', (e)=> {
	e.preventDefault();
	displaySearchResults(searchInput.value);
})


function displaySearchResults(x){
	
	let url = `https://uz.wikipedia.org/w/api.php?action=query&list=search&prop=info&inprop=url&utf8=&format=json&origin=*&srlimit=20&srsearch=${x}`;
	console.log(url);
	
	fetch(url)
		.then(function(response) {
    		return (response.json());
  		})
  		.then(function(data){
  			let resultsArray = data.query.search;
  			resultsOnPage(resultsArray);
  		})
  		.catch(function () {
   			console.log('Xatolik');
		});
}


function resultsOnPage(myArray){

	resultsList.innerHTML = " ";
	resultsList.insertAdjacentHTML('beforeend', `<center><div style="width:700px" align="left"><b>${searchInput.value}</b> so'roviga natijalar</div></center>`);


	myArray.forEach(function(item){
		let itemTitle = item.title;
		let itemSnippet = item.snippet;
		let itemUrl = encodeURI(`https://uz.wikipedia.org/wiki/${item.title}`);
		
		resultsList.insertAdjacentHTML('beforeend',
      	`<center><div align="left" class="resultItem" style="width:700px;">
          <a href="${itemUrl}" target="_blank" style="color:#093375; font-size:20px" rel="noopener">${itemTitle}</a>
         <p class="resultSnippet">
         ${itemSnippet}</p>
        </div></center>`
    	);

	})

}
