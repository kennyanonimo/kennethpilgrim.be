@extends('index')
@section('content')
<main id="contactMain" class="container">
     <div class="row">
        <div id="contactForm" class="col-md-6">
            <div class="formBody">
                <form method="post" action="/comment" class="ccform">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="fullName" class="formIcon">
                            <i class="fa fa-user fa-fw"></i>
                            Who are you?
                        </label>
                        <div class="formBorder">
                            <select class="formField" id="title" name="title" required>
                                <option value="" disabled selected hidden>Title</option>
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Miss.</option>
                                <option>Ms.</option>
                            </select>
                            <input class="formField" id="firstName" name="firstName" type="text" placeholder="First Name" pattern=".{2,}" required>
                            <input class="formField" id="lastName" name="lastName" type="text" placeholder="Last Name" pattern=".{2,}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="formIcon">
                            <i class="fa fa-envelope fa-fw"></i>
                            How can I contact you?
                        </label>
                        <div class="formBorder">
                            <input class="formField" id="email" name="email" type="email" placeholder="Email" required>
                            <input class="formField" id="phone" name="phone" type="text" placeholder="Phone" pattern=".{8,}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="formIcon">
                            <i class="fa fa-info fa-fw"></i>
                            What do you want to talk about?
                        </label>
                        <div class="formBorder">
                            <input class="formField" id="subject" name="subject" type="text" placeholder="Subject" pattern=".{5,}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="formIcon">
                            <i class="fa fa-comment fa-fw"></i>
                            Leave me a message.
                        </label>
                        <div class="formBorder">
                            <textarea class="formField" id="comment" name="comment" rows="4" placeholder="Message" minlength ="20" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="formBorder">
                            <input class="formButton" id="submit" name="submit" type="submit" value="Submit">
                        </div>
                        @if ($errors->any())
                            <p class="formError">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                            </p>
                        @endif
                        @if ($messages)
                            <p class="formReaction">
                            @foreach ($messages as $message)
                                {{ $message }}<br>
                            @endforeach
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <div id="contactInfo" class="col-md-6">
            <div class="infoHeader">
                <i class="fa fa-user fa-fw"></i>
                How can you contact me?
                <ul class="list-inline" id="formIcons">
                    <li><a target="_blank" href="https://gitlab.com/kennethpilgrim"><i class="fa fa-github-square"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/kenneth_pilgrim"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/kenneth_pilgrim/"><i class="fa fa-pinterest"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/kennethpilgrim/"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/kennethpilgrim.eu"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://plus.google.com/u/0/111340358723834568911"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/in/kennethpilgrim-eu"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="infoBody">
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td class="firstrow"><i class="fa fa-envelope-o"></i></td>
                            <td><a href="mailto:kenneth@kennethpilgrim.eu"><span>kenneth@kennethpilgrim.eu</span></a></td>
                            <td class="lastrow"></td>
                        </tr>
                        <tr>
                            <td class="firstrow"><i class="fa fa-envelope-o"></i></td>
                            <td><a href="mailto:root@root.land"><span>root@root.land</span></a></td>
                            <td class="lastrow"></td>
                        </tr>
                        <tr>
                            <td class="firstrow"><i class="fa fa-phone"></i></td>
                            <td><a href="tel:+32495706598">+32 495 70 65 98</a></td>
                            <td class="lastrow"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="infoHeader">
                <i class="fa fa-clock-o fa-fw"></i>
                When can you contact me?
            </div>
            <div class="infoBody">
                <table border="1" cellpadding="1" cellspacing="1">
                   <tbody>
                       <tr><td class="firstrow"><i class="fa fa-clock-o"></i></td><td>Weekdays</td><td>20:00</td><td>22:00</td><td class="lastrow"></td></tr>
                       <tr><td class="firstrow"><i class="fa fa-clock-o"></i></td><td>Saturday</td><td>12:00</td><td>20:00</td><td class="lastrow"></td></tr>
                        <tr><td class="firstrow"><i class="fa fa-clock-o"></i></td><td>Sunday</td><td>12:00</td><td>16:00</td><td class="lastrow"></td></tr>
                    </tbody>
                </table>
            </div>

            <div class="infoHeader">
                <i class="fa fa-lock fa-fw"></i>
                Contact me securely!
            </div>
            <div class="infoBody" id="PGP">
                <section><!-- TODO: DOESNT WORK IN EDGE??? -->
                    <article>
                        <details>
                            <summary>kenneth@kennethpilgrim.eu</summary>
                            <details class="pgpExpand">
                                <summary>PGP Public Key</summary>
                                <pre>-----BEGIN PGP PUBLIC KEY BLOCK-----
mQENBFiTN9cBCACjgXJHkO6fd3Odll3n9R4g1T4v42WKgxMj2pmVqW3wUuFHaBGs
3WqGE9omzpGCsh/yCUHDdloryXSbwJY7RNQlU+4i5kqVG11I3f4eYkVMcBm2Tcmc
9ZKST22os+CvWFf0NF1JPvCI4I3OW1MHc0/BxM6e01leSkMVyZXhL2qRKsoZU3Ry
WXj+g2DCh9Ii8QtFRXktAd3f36vIpGxJBl5D0F82iP65ZcnqMUsBhTp9+IhIZoy/
U16MqdGA70E390I3oyGkSa6TeuVJ8uPVyxgxasP7svgGcFai5RSzc3XrTH5m5CQZ
ExA5LTUeQOIb6nNnzbbJa1VTKqnjkcg9GpMRABEBAAG0K0tlbm5ldGggUGlsZ3Jp
bSA8a2VubmV0aEBrZW5uZXRocGlsZ3JpbS5ldT6JAVQEEwEIAD4WIQSjf6CxHv6X
3kIlPL8gsNDYis1oKgUCWJM31wIbAwUJA8JnAAULCQgHAgYVCAkKCwIEFgIDAQIe
AQIXgAAKCRAgsNDYis1oKn3jB/98qjuL3W9ISykh+xULk2W8LkOZs4IEKiCK1RBh
0fGjfWfTnoKEkao0pxdO+i7IgzddZrrlrFKwKU4e54ubk7W8HL9T7ciAZ3bcA3ur
MjRcp7Zeq4Pu411V4b+6y1PCaUCJOd+EFjOF7Sa2PGT07UnosvwarVz0NgiqeJ5L
8aZxp3wo9S4XCdqEvB7mzWEgVlTJvcCoatjqxmuMZqMkWMcDIig72NPN5Ruozgwe
HpOZN1EVRtJylOL4nKEXap/RbELvrgxtgP4MwdVgC/H8UqJeORZ0UFP/ZqJC0h4y
JzojAq1kJvpth0VNfJpuBp+S0XZe/3ud427e85gbGHT8NwMouQENBFiTN9cBCADe
S4OS2ezyB6woi4KzgJsll8bUKzfX/vFcL7iYK81UeM4wgd7dfEpI77ZAbvv1s5b/
mT6qzVaR5r67gOBOD3tBVnWpyfKcvcawLY9UdlLpP7cluxvLlDImm3Fi3w8GamZD
JLFQUXPzU2COFG35Pad9NFxbqXkFA3t/TOmujnye8QG0YOJqQUwSQb5n3c2R+6RQ
QgB3ufjyumpIBKHAdRbrL8s7smmakxF9//ZnlwZviN21/XmZznMSn1UmdFuiCcuj
50aryBSGV5zxrX002FnuH6oFweMwdEl96MZLCCgiqkTL7s83q6QWEJ9JI5bOUk0a
+iUdkyfxWZy8AgYG+Q2TABEBAAGJATwEGAEIACYWIQSjf6CxHv6X3kIlPL8gsNDY
is1oKgUCWJM31wIbDAUJA8JnAAAKCRAgsNDYis1oKrChB/9oNQkxPLEWfvGrgvE2
C1lA6zuOhvcuz2CdR5R6HSuj8xiyewaAQ2Mk3h/VoRr7G2TMQtnmTQaMZJts4IcO
LNfcvcH9f9e23gnn+0yH711EDkl3JQ27HsW1yAW41acyZke0e2ukCF9+Yr+PrBXi
Waq3kZHn2LYVFDh2EG1+NB5qh5co0WLByP0qww5LTFx6qFfNYBuY/lCN49MouUbY
WpcIzanzuAMEaYhi8botCzBupqzIrJPBgOWXTg3f2ggz9ItEauAcUWLP/UZ+DCKQ
9vZFKhZ3KKKtQDaLGsmq0XY4JS7V/swdZRSktVQGwe1Y93RACInQMtXZKAIAEuqa
A9Sw
=zKxq
-----END PGP PUBLIC KEY BLOCK-----</pre>
                            </details>
                            <details class="pgpExpand">
                                <summary>PGP Fingerprint</summary>
                                <pre>A37F A0B1 1EFE 97DE 4225  3CBF 20B0 D0D8 8ACD 682A</pre>
                            </details>
                        </details>
                    </article>
                    <article>
                        <details>
                            <summary>root@root.land</summary>
                            <details class="pgpExpand">
                                <summary>PGP Public Key</summary>
                                <pre>-----BEGIN PGP PUBLIC KEY BLOCK-----
mQENBFiTOGQBCADO/YtYML7Nn2gljEWn16GsSgsOnx9oXvV0BhmBvB3PHPP+BJ7m
nAtnWVEdT7YNx2SXF4eVypWa7Md2mnnKFm1baYMNzkNZMv1RomcfaIlAugFaxjug
/ZX7EF7cir/7qRaZbNJb/icDKuzh+Q76wiucbQ34y6sH+5FnLueQ/ybVJDtaeZXz
EuFllIjcU/45vFsVKz1Rdz16HhsNLYre4kI5AGAaN7RhOPkpKriXAzyHz1NJvbAW
qXGUrKq021H5il6RavgYs+HbAHrfpBrPW8HlG19xhXWCARG/v1zZJiY5Ydk5MoVU
6t2LwNkAP7CtIUhBdj7fSrL+gqlffDcTQtD1ABEBAAG0GVJvb3RMYW5kIDxyb290
QHJvb3QubGFuZD6JAVQEEwEIAD4WIQQ8z9tfZfBOBkUrfgTthBUABPFkxgUCWJM4
ZAIbAwUJA8JnAAULCQgHAgYVCAkKCwIEFgIDAQIeAQIXgAAKCRDthBUABPFkxs+X
CACPuciu9LMTJoJC82mZVMfZQuXaX1PIu2A1TcGf6ZBwlHiaDWtf0M4sLR6jikIP
eBV9R66rI3zXUubLUCGnRYuQ0JfD4GZXnMorIBzpVRhaVbmX++NHCjv2cMBr5rXB
OWlkcEhiQyAyDSgRvC5UEYhxxyAsGwJkOOA1p3Txbcdg0cT/xiBMiZRu0acH7zo0
yCp7AKUMsdd2aFcTut6BYkLDhoBUPivWYNsUq1nBv/pzQWjvheMIk2C5OKrPOIQl
N2Gz/foIFpBzZAMl+DzYnONmKp/EPpC+81s7EUmEZawm8JYZvtwKJN3xNaDrVOXb
EmVIkJB7otdSLbx0zjTa3/7IuQENBFiTOGQBCAClGQK8+R3mW8iP/Gv891MsTLKl
9nfNn4ysvyQfYkOnEu/YCieSPwdtURrRUgArkPL4Amobm8NHFKuKEMVWsfseIzW1
/u5AtoxCr5GiR5VYkUT+6L1IZKgSjOvYZ7/WCdkA/RzGdw0ZxouF2JzKE1Lmu5sj
0SRZflTzXPxBGLrhNUVXJ/l4pMmmUXTYd1K10JSIJvm36VgZlZcu283rq1Ag2lxw
pqJpRcNqB0Uw6zJ4vvXDHCIuZawfhdPRDH5ORjae2J0YOfvVWknuV+r0W3Hgn4wv
hxEx2oeY6WH/SZpPTvvxceCw2ss6C9DOu7L+jQxSCfrpG832j8Qt+G3gAqWjABEB
AAGJATwEGAEIACYWIQQ8z9tfZfBOBkUrfgTthBUABPFkxgUCWJM4ZAIbDAUJA8Jn
AAAKCRDthBUABPFkxnmDB/0eBcGw/HZDJ0CKb6wwGFUx8tIBkqMnlD2BnC9lg5EY
XapReLur2yLSiK5NT1oPECtFPwjndQftH1JzBaZJfUnCvE5O7z83iSS4m1q8jSQy
Xgk1EnCiJVJM9NZY6TlNssOZxiiP6gqeohAqnS6reJa/1gnndW6S8hogBIhotftW
2gSPaNRkLrsCt9u+cA6DnxypG1hmMfsjO91685JOyXnAUJZqrp4oUd6tEwVZX3Oz
GS3yoECnz5xbGgaRGbH6e8DDW7FmEyRNBQlmr99X9Ixev4FZ3nGbS3KfhIw680tE
gN5kmwt7+mcFGkO9Qtqqsp84hhbg6I6MnTqeVngRypXP
=0kCh
-----END PGP PUBLIC KEY BLOCK-----</pre>
                            </details>
                            <details class="pgpExpand">
                                <summary>PGP Fingerprint</summary>
                                <pre>3CCF DB5F 65F0 4E06 452B  7E04 ED84 1500 04F1 64C6</pre>
                            </details>
                        </details>
                    </article>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
