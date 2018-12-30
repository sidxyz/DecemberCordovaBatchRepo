var localStorage = window.localStorage;
var baseUrl = 'https://006b4bdc.ngrok.io';
var contentOfSecurityPolicy = `default-src 'self' 
 `+baseUrl+` 
 data: gap: ms-appdata: https://ssl.gstatic.com 'unsafe-eval';
 style-src 'self' 'unsafe-inline'; `;
//  media-src *; `;

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
