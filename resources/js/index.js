import axios from 'axios'

const token = document.head.querySelector('meta[name="csrf-token"]') || ''

export default axios.create({

  baseURL: 'http://localhost:8000/',
  
  
})
