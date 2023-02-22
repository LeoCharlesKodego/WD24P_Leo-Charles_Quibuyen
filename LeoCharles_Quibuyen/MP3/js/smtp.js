/* responsible for receiving data from HTML forms*/
var Email = { send: function (a) { return new Promise(function (n, e) { a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send"; var t = JSON.stringify(a); Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) { n(e) }) }) }, ajaxPost: function (e, n, t) { var a = Email.createCORSRequest("POST", e); a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () { var e = a.responseText; null != t && t(e) }, a.send(n) }, ajax: function (e, n) { var t = Email.createCORSRequest("GET", e); t.onload = function () { var e = t.responseText; null != n && n(e) }, t.send() }, createCORSRequest: function (e, n) { var t = new XMLHttpRequest; return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t } };


function sendEmail() {
  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "jeyson.abrogar-gmi@outlook.com",
    Password: "FF519307A9575AC2E3F0BDEC63BB829044F3",
    To: 'jeyson.abrogar-gmi@outlook.com',
    From: document.getElementById("Email").value,
    Subject: "New Contact Inquiry",
    Body: document.getElementById("message").value,
  }).then(
    message => alert("Thank you for your message!")
  );
}

