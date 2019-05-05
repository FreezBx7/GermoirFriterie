import axiosInstance from './axios-instance';

function getProducts() {
  return axiosInstance.get('/product');
}

export {
  getProducts,
};
