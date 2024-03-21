// Función para abrir la pestaña correspondiente
window.onload = function() {
    // Crear un objeto de evento simulado
    const simulatedEvent = { currentTarget: document.getElementById('Inicio') };
    
    // Llama a la función openTab con el objeto de evento simulado y el nombre de la pestaña inicialmente activa
    openTab(simulatedEvent, 'Inicio');
  }; 
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";

    limpiarFormularios(["formCrearTickets", "formMisTickets"]);

  }

  
function limpiarFormularios() {
    // Limpiar formulario CrearTickets
    document.getElementById("formCrearTickets").reset();
    // Limpiar formulario MisTickets
    document.getElementById("formMisTickets").reset();

    // Eliminar mensajes de error
    var invalidInputs = document.querySelectorAll('.is-invalid');
    invalidInputs.forEach(function(input) {
        input.classList.remove('is-invalid');
    });
}

  

   
  /*
  // Función para validar el formulario
  function validateForm() {
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var tel = document.getElementById('tel').value;
    var mensaje = document.getElementById('mensaje').value;
    
    var nombreError = document.getElementById('nombreError');
    var emailError = document.getElementById('emailError');
    var telError = document.getElementById('telError');
    var mensajeError = document.getElementById('mensajeError');
  
      // Limpiar los mensajes de error
      nombreError.innerHTML = "";
      emailError.innerHTML = "";
      telError.innerHTML = "";
      mensajeError.innerHTML = "";
    
  
    // Validar que el nombre y el mensaje no estén vacíos
    if (nombre.trim() === "") {
        nombreError.innerHTML = "Por favor, ingresa tu nombre";
        return false; // Evitar que el formulario se envíe
    }
  
    if (email.trim() === "") {
        emailError.innerHTML = "Por favor, ingresa un correo valido";
        return false; // Evitar que el formulario se envíe
    }
  
    if (tel.trim() === "") {
        telError.innerHTML = "Por favor, ingresa numero de telefono";
        return false; // Evitar que el formulario se envíe
    }
  
    if (mensaje.trim() === "") {
        mensajeError.innerHTML = "Por favor, ingresa una sugerencia";
        return false; // Evitar que el formulario se envíe
    }
  
    
  
    document.getElementById('CrearTickets').reset();
  
  
    return true; // Permitir el envío del formulario si pasa todas las validaciones
  
  }






  
  function validateForm2() {
    var nombreMi = document.getElementById('nombreMi').value;
    var emailMi = document.getElementById('emailMi').value;
  
    
    var nombreMiError = document.getElementById('nombreMiError');
    var emailMiError = document.getElementById('emailMiError');
  
    nombreMiError.innerHTML = "";
    emailMiError.innerHTML = "";
    
    
  
    // Validar que el nombre y el mensaje no estén vacíos
    if (nombreMi.trim() === "") {
        nombreMiError.innerHTML = "Por favor, ingresa tu nombre";
        return false; // Evitar que el formulario se envíe
    }
  
    if (emailMi.trim() === "") {
        emailMiError.innerHTML = "Por favor, ingresa un correo valido";
        return false; // Evitar que el formulario se envíe
    }
  
  
    document.getElementById('MisTickets').reset();
  
  
    return true; // Permitir el envío del formulario si pasa todas las validaciones
  
  } 

  /*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2024 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.*/
 

(() => {
    'use strict'
  
    const getStoredTheme = () => localStorage.getItem('theme')
    const setStoredTheme = theme => localStorage.setItem('theme', theme)
  
    const getPreferredTheme = () => {
      const storedTheme = getStoredTheme()
      if (storedTheme) {
        return storedTheme
      }
  
      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }
  
    const setTheme = theme => {
      if (theme === 'auto') {
        document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
      } else {
        document.documentElement.setAttribute('data-bs-theme', theme)
      }
    }
  
    setTheme(getPreferredTheme())
  
    const showActiveTheme = (theme, focus = false) => {
      const themeSwitcher = document.querySelector('#bd-theme')
  
      if (!themeSwitcher) {
        return
      }
  
      const themeSwitcherText = document.querySelector('#bd-theme-text')
      const activeThemeIcon = document.querySelector('.theme-icon-active use')
      const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
      const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')
  
      document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
        element.classList.remove('active')
        element.setAttribute('aria-pressed', 'false')
      })
  
      btnToActive.classList.add('active')
      btnToActive.setAttribute('aria-pressed', 'true')
      activeThemeIcon.setAttribute('href', svgOfActiveBtn)
      const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
      themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)
  
      if (focus) {
        themeSwitcher.focus()
      }
    }
  
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
      const storedTheme = getStoredTheme()
      if (storedTheme !== 'light' && storedTheme !== 'dark') {
        setTheme(getPreferredTheme())
      }
    })
  
    window.addEventListener('DOMContentLoaded', () => {
      showActiveTheme(getPreferredTheme())
  
      document.querySelectorAll('[data-bs-theme-value]')
        .forEach(toggle => {
          toggle.addEventListener('click', () => {
            const theme = toggle.getAttribute('data-bs-theme-value')
            setStoredTheme(theme)
            setTheme(theme)
            showActiveTheme(theme, true)
          })
        })
    })
  })()



  