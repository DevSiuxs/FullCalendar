 
<p align="center"> <strong style="font-size:30px;">🗓️ Full Calendar</strong> </p> <p align="center"> <img src="https://github.com/user-attachments/assets/82b8f5fa-a3a2-4aea-acd6-e987d41da1d4" alt="FullCalendar Example" width="500"> </p>

<p align="start"> <strong style="font-size:30px;">
  🔥 Características principales<br>
✔️ Vistas flexibles (mes, semana, día, agenda, lista) <br>
✔️ Soporte para arrastrar y soltar eventos<br>
✔️ Integración con Google Calendar y otras APIs<br>
✔️ Diseño responsive que funciona en móviles y desktop<br>
✔️ Soporte para múltiples frameworks (React, Vue, Angular)</strong></p></p><br>

```js
📦Instalación rápida
bash
npm install @fullcalendar/core @fullcalendar/daygrid


🚀 Uso básico
javascript
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

const calendar = new Calendar(document.getElementById('calendar'), {
  plugins: [ dayGridPlugin ],
  initialView: 'dayGridMonth'
});

calendar.render();
```

[FullCalendar](https://fullcalendar.io/docs)  
