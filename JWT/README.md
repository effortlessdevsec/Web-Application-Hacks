## JWT HACK

* [What is JWT](#JWT)



## JWT

```
A JSON Web Token (JWT) is an open standard (RFC 7519) that used for securely transmitting information between parties as a JSON object. 
This information can be verified and trusted because it is digitally signed.
JWTs can be signed using a secret or a public/private key pair

````
### JSON Web Token Structure:

```
Json Web Token consist of :
   Header
   Payload
   Signature
  
  ```
  Header : - In this part algorithm is defined . which alogorithm  is using to generate the token like:
  
  {
  "alg": "RS256",
  "typ": "JWT"
}
  
    
```
