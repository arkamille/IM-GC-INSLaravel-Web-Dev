<html>
    <head>
        <style>
            html{zoom: 80%;}
         </style>
    </head>
    <body>
        <form action="{{url('welcome')}}">
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        First Name:<br><br>
        <input type="text" id="first" name="first" required><br><br>
        Last Name:<br><br>
        <input type="text" id="last" required><br><br>
        Gender:<br><br>
        <input type="radio" id="Male" name="gen" required>Male</input><br>
        <input type="radio" id="Female" name="gen" required>Female</input><br>
        <input type="radio" id="Other" name="gen" required>Other</input><br><br>
        Nationality:<br><br>
        <select id="nation" required>
            <option value="	Afghan	">	Afghan	</option>
            <option value="	Albanian	">	Albanian	</option>
            <option value="	Algerian	">	Algerian	</option>
            <option value="	Andorran	">	Andorran	</option>
            <option value="	Angolan	">	Angolan	</option>
            <option value="	Argentinian	">	Argentinian	</option>
            <option value="	Armenian	">	Armenian	</option>
            <option value="	Australian	">	Australian	</option>
            <option value="	Austrian	">	Austrian	</option>
            <option value="	Azerbaijani	">	Azerbaijani	</option>
            <option value="	Bahamaian	">	Bahamaian	</option>
            <option value="	Bangladeshi	">	Bangladeshi	</option>
            <option value="	Barbadian	">	Barbadian	</option>
            <option value="	Belarussian	">	Belarussian	</option>
            <option value="	Belgian	">	Belgian	</option>
            <option value="	Beninese	">	Beninese	</option>
            <option value="	Bhutanese	">	Bhutanese	</option>
            <option value="	Bolivian	">	Bolivian	</option>
            <option value="	Bosnian	">	Bosnian	</option>
            <option value="	Brazilian	">	Brazilian	</option>
            <option value="	Bruneian	">	Bruneian	</option>
            <option value="	Bulgarian	">	Bulgarian	</option>
            <option value="	Burmese	">	Burmese	</option>
            <option value="	Burundian	">	Burundian	</option>
            <option value="	Cambodian	">	Cambodian	</option>
            <option value="	Cameroonian	">	Cameroonian	</option>
            <option value="	Canadian	">	Canadian	</option>
            <option value="	Chadian	">	Chadian	</option>
            <option value="	Chilean	">	Chilean	</option>
            <option value="	Chinese	">	Chinese	</option>
            <option value="	Columbian	">	Columbian	</option>
            <option value="	Congolese	">	Congolese	</option>
            <option value="	Croatian	">	Croatian	</option>
            <option value="	Cuban	">	Cuban	</option>
            <option value="	Cypriot	">	Cypriot	</option>
            <option value="	Czech	">	Czech	</option>
            <option value="	Danish	">	Danish	</option>
            <option value="	Dominican	">	Dominican	</option>
            <option value="	Ecuadorian	">	Ecuadorian	</option>
            <option value="	Egyptian	">	Egyptian	</option>
            <option value="	Salvadorean	">	Salvadorean	</option>
            <option value="	English	">	English	</option>
            <option value="	Eritrean	">	Eritrean	</option>
            <option value="	Estonian	">	Estonian	</option>
            <option value="	Ethiopian	">	Ethiopian	</option>
            <option value="	Fijian	">	Fijian	</option>
            <option value="	Finnish	">	Finnish	</option>
            <option value="	French	">	French	</option>
            <option value="	Gabonese	">	Gabonese	</option>
            <option value="	Gambian	">	Gambian	</option>
            <option value="	Georgian	">	Georgian	</option>
            <option value="	German	">	German	</option>
            <option value="	Ghanaian	">	Ghanaian	</option>
            <option value="	Greek	">	Greek	</option>
            <option value="	Granadian	">	Granadian	</option>
            <option value="	Guatemalan	">	Guatemalan	</option>
            <option value="	Guinean	">	Guinean	</option>
            <option value="	Guyanese	">	Guyanese	</option>
            <option value="	Haitian	">	Haitian	</option>
            <option value="	Honduran	">	Honduran	</option>
            <option value="	Hungarian	">	Hungarian	</option>
            <option value="	Icelandic	">	Icelandic	</option>
            <option value="	Indian	">	Indian	</option>
            <option value="	Indonesian	" selected="selected">	Indonesian	</option>
            <option value="	Iranian	">	Iranian	</option>
            <option value="	Iraqi	">	Iraqi	</option>
            <option value="	Irish	">	Irish	</option>
            <option value="	Israeli	">	Israeli	</option>
            <option value="	Italian	">	Italian	</option>
            <option value="	Jamaican	">	Jamaican	</option>
            <option value="	Japanese	">	Japanese	</option>
            <option value="	Jordanian	">	Jordanian	</option>
            <option value="	Kazakh	">	Kazakh	</option>
            <option value="	Kenyan	">	Kenyan	</option>
            <option value="	Korean	">	Korean	</option>
            <option value="	Kuwaiti	">	Kuwaiti	</option>
            <option value="	Laotian	">	Laotian	</option>
            <option value="	Latvian	">	Latvian	</option>
            <option value="	Lebonese	">	Lebonese	</option>
            <option value="	Liberian	">	Liberian	</option>
            <option value="	Libyan	">	Libyan	</option>
            <option value="	Liechtensteiner	">	Liechtensteiner	</option>
            <option value="	Lithuanian	">	Lithuanian	</option>
            <option value="	Luxembourger	">	Luxembourger	</option>
            <option value="	Macedonian	">	Macedonian	</option>
            <option value="	Madagascan	">	Madagascan	</option>
            <option value="	Malawian	">	Malawian	</option>
            <option value="	Malaysian	">	Malaysian	</option>
            <option value="	Maldivian	">	Maldivian	</option>
            <option value="	Malian	">	Malian	</option>
            <option value="	Maltese	">	Maltese	</option>
            <option value="	Mauritanian	">	Mauritanian	</option>
            <option value="	Mauritian	">	Mauritian	</option>
            <option value="	Mexican	">	Mexican	</option>
            <option value="	Moldovan	">	Moldovan	</option>
            <option value="	Monocan	">	Monocan	</option>
            <option value="	Mongolian	">	Mongolian	</option>
            <option value="	Montenegrin	">	Montenegrin	</option>
            <option value="	Moroccan	">	Moroccan	</option>
            <option value="	Mozambican	">	Mozambican	</option>
            <option value="	Namibian	">	Namibian	</option>
            <option value="	Nepalese	">	Nepalese	</option>
            <option value="	Dutch	">	Dutch	</option>
            <option value="	Nicaraguan	">	Nicaraguan	</option>
            <option value="	Nigerien	">	Nigerien	</option>
            <option value="	Nigerian	">	Nigerian	</option>
            <option value="	Norwegian	">	Norwegian	</option>
            <option value="	Pakistani	">	Pakistani	</option>
            <option value="	Panamanian	">	Panamanian	</option>
            <option value="	Paraguayan	">	Paraguayan	</option>
            <option value="	Peruvian	">	Peruvian	</option>
            <option value="	Filipino	">	Filipino	</option>
            <option value="	Polish	">	Polish	</option>
            <option value="	Portuguese	">	Portuguese	</option>
            <option value="	Qatari	">	Qatari	</option>
            <option value="	Romanian	">	Romanian	</option>
            <option value="	Russian	">	Russian	</option>
            <option value="	Rwandan	">	Rwandan	</option>
            <option value="	Saudi	">	Saudi	</option>
            <option value="	Scottish	">	Scottish	</option>
            <option value="	Senegalese	">	Senegalese	</option>
            <option value="	Serbian	">	Serbian	</option>
            <option value="	Singaporean	">	Singaporean	</option>
            <option value="	Slovakian	">	Slovakian	</option>
            <option value="	Slovenian	">	Slovenian	</option>
            <option value="	Somalian	">	Somalian	</option>
            <option value="	Spanish	">	Spanish	</option>
            <option value="	Sri Lankan	">	Sri Lankan	</option>
            <option value="	Sudanese	">	Sudanese	</option>
            <option value="	Surinamese	">	Surinamese	</option>
            <option value="	Swazi	">	Swazi	</option>
            <option value="	Swedish	">	Swedish	</option>
            <option value="	Swiss	">	Swiss	</option>
            <option value="	Syrian	">	Syrian	</option>
            <option value="	Taiwanese	">	Taiwanese	</option>
            <option value="	Tadzhik	">	Tadzhik	</option>
            <option value="	Tanzanian	">	Tanzanian	</option>
            <option value="	Thai	">	Thai	</option>
            <option value="	Togolese	">	Togolese	</option>
            <option value="	Trinidanian	">	Trinidanian	</option>
            <option value="	Tunisian	">	Tunisian	</option>
            <option value="	Turkish	">	Turkish	</option>
            <option value="	Ugandan	">	Ugandan	</option>
            <option value="	Ukrainian	">	Ukrainian	</option>
            <option value="	British	">	British	</option>
            <option value="	American	">	American	</option>
            <option value="	Uruguayan	">	Uruguayan	</option>
            <option value="	Uzbek	">	Uzbek	</option>
            <option value="	Venezuelan	">	Venezuelan	</option>
            <option value="	Vietnamese	">	Vietnamese	</option>
            <option value="	Welsh	">	Welsh	</option>
            <option value="	Yemeni	">	Yemeni	</option>
            <option value="	Yugoslavian	">	Yugoslavian	</option>
            <option value="	Zambian	">	Zambian	</option>
            <option value="	Zimbabwean	">	Zimbabwean	</option>            
        </select><br><br>
        Language Spoken:<br><br>
        <input type="radio" id="Bahasa Indonesia" name="lang" value="HTML" required>Bahasa Indonesia<br>
        <input type="radio" id="English" name="lang" value="HTML" required>English<br>
        <input type="radio" id="Other" name="lang" value="HTML" required>Other<br><br>
        Bio:<br><br>
        <textarea id="Bio" name="Bio" rows="9" cols="30" required></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
    </body>
</html>