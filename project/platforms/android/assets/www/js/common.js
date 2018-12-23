var localStorage = window.localStorage;
var baseUrl = 'https://58883ac1.ngrok.io';
var contentOfSecurityPolicy = `default-src 'self' 
 `+baseUrl+` 
 data: gap: https://ssl.gstatic.com 'unsafe-eval';
 style-src 'self' 'unsafe-inline'; 
 media-src *; 
 img-src 'self' data: content:;`;

localStorage.setItem('baseUrl',baseUrl);
localStorage.setItem('contentSecurityPolicy',contentOfSecurityPolicy);

function attachSecurityPolicyToHead(contentOfSecurityPolicy)
{
    var headElement = document.querySelector('head');
    var newMetaTag = document.createElement('meta');

    newMetaTag.httpEquiv = "Content-Security-Policy";
    newMetaTag.content = contentOfSecurityPolicy;

    //newMetaTag.appendChild(newMetaTag);
    headElement.insertBefore(newMetaTag, headElement.childNodes[0] || null);

    console.log('csr applied successfully!');
}

console.log("applying csr...");
attachSecurityPolicyToHead(contentOfSecurityPolicy);
