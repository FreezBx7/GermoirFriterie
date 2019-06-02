import axiosInstance from './axios-instance';

function postOrder(newOrder) {
  return axiosInstance.post('/order', JSON.stringify(newOrder));
}

export {
  postOrder,
};