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
  

Header : - In this part algorithm is defined . which alogorithm  is using to generate the token like:
  
  {
   "alg": "RS256",
   "typ": "JWT"
}

Payload : - User information that is anything like username , email etc.

{ "user": "effortlessdevsec"

}
  
Signature: -  Signature is an random string that is created using header payload and secret   

JWT follow the following pattern:

Base64(Header).Base64(payload).Base64(Signature)

Signature = sign (Base64(Header).Base64(payload),key)

```
