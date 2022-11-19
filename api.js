let book=document.getElementById('book');
let res=``;
let url="https://example-data.draftbit.com/books?_limit=200";
async function getData()
{
let response=await fetch(url);
let data=await response.json();

for(let i=0;i<data.length;i++)
{
    res+=`

    <div class="book-list">

    
            <div><img src="${data[i].image_url}"></div>
            <div><h4>${data[i].title}</h4></div>
            <div><button>Add to favorite</button></div>
    
            </div>

    
    `;
}

    book.innerHTML=res;
}



getData();



  