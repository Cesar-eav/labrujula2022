import axios from 'axios'

const token = document.head.querySelector('meta[name="csrf-token"]') || ''

export default axios.create({

  baseURL: 'http://localhost:8000/',
  
  //http://143.110.237.139:8080/ VPS RUTA DEL PROYECTO DJANGO
})
