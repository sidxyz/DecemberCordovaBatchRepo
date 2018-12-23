
var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        //write your functionality here!
        var baseUrl = localStorage.getItem('baseUrl');
        $.get(baseUrl+'/showAllProducts',callBackFunction);
    },
};

function callBackFunction(responseData,status,xhr)
{
    //console.log("server response data is = "+responseData+" status = "+status+" xhr ="+xhr);
    var productsArray = responseData;
    var htmlContent =` `;
    var bodyElement = document.querySelector('#productTableBody');
    var baseUrl = localStorage.getItem('baseUrl');
    for(var i =0 ;i<productsArray.length;i++)
    {        
        var newTrTag = document.createElement('tr');

        var tdRowIdTag = document.createElement('td');
        tdRowIdTag.scope = "row";
        tdRowIdTag.value = i+1;
        newTrTag.appendChild(tdRowIdTag);

        var tdRowNameTag = document.createElement('td');
        tdRowNameTag.textContent = productsArray[i].name;
        newTrTag.appendChild(tdRowNameTag);

        var tdRowDescriptionTag = document.createElement('td');
        tdRowDescriptionTag.textContent = productsArray[i].description;
        newTrTag.appendChild(tdRowDescriptionTag);

        var tdRowDimensionTag = document.createElement('td');
        tdRowDimensionTag.textContent = productsArray[i].dimension; 
        newTrTag.appendChild(tdRowDimensionTag);
        
        var tdRowColorTag = document.createElement('td');
        tdRowColorTag.textContent=productsArray[i].color;
        newTrTag.appendChild(tdRowColorTag);

        var tdRowEditTag = document.createElement('td');
        var aRowEditTag =  document.createElement('a');
        aRowEditTag.textContent = "edit";
        aRowEditTag.id=productsArray[i].id;
        aRowEditTag.onclick=function(){
            localStorage.setItem('EditInventoryId',this.id);
            window.location = "editInventory.html";
        };
        tdRowEditTag.appendChild(aRowEditTag);
        newTrTag.appendChild(tdRowEditTag);

        var tdRowDeleteTag = document.createElement('td');
        var aRowDeleteTag =  document.createElement('a');
        aRowDeleteTag.textContent = "delete";
        aRowDeleteTag.id=productsArray[i].id;
        aRowDeleteTag.onclick=function()
        {
            $.get(baseUrl+'/deleteProduct/'+this.id,deleteCallBackFunction);
        };
        tdRowDeleteTag.appendChild(aRowDeleteTag);
        newTrTag.appendChild(tdRowDeleteTag);

        //console.log(newTrTag.innerHTML);
        bodyElement.appendChild(newTrTag);

    //    htmlContent+=`<tr>`;
    //    htmlContent+=`<th scope="row">`+(i+1)+`</th>`;
    //    htmlContent+=`<td>`+productsArray[i].name+`</td>`;
    //    htmlContent+=`<td>`+productsArray[i].description+`</td>`;
    //    htmlContent+=`<td>`+productsArray[i].dimension+`</td>`;
    //    htmlContent+=`<td>`+productsArray[i].color+`</td>`;
    //    htmlContent+=`<td><a> &#9998;</a> </td>`;
    //    htmlContent+=`<td><a value="`+productsArray[i].id+`" onclick="deleteProduct(this.value)"> &#10799;</a> </td>`;
    //    htmlContent+=`</tr>`;
    } 
    
    //bodyElement.innerHTML = htmlContent;
}

function deleteCallBackFunction(responseData,status,xhr)
{
    //console.log("server response data is = "+responseData+" status = "+status+" xhr ="+xhr);
    alert("product deleted successfully!");
    window.location="showProductsFromDatabase.html";
}

app.initialize();















