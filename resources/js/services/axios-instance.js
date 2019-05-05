import axios from 'axios';

const axiosInstance = axios.create({
  baseURL: 'http://185.164.234.203/api/',
});

export default axiosInstance;
