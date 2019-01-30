export function getLocalStorageItem(itemName) {
  return JSON.parse(localStorage.getItem(itemName));
}
export function getLocalStorageNumber(itemName) {
  if (localStorage.getItem(itemName)) {
    return JSON.parse(localStorage.getItem(itemName));
  }
  return 0;
}
export function getLocalStorageArray(itemName) {
  if (localStorage.getItem(itemName)) {
    return JSON.parse(localStorage.getItem(itemName));
  }
  return [];
}
export function getLocalStorageObject(itemName) {
  if (localStorage.getItem(itemName)) {
    return JSON.parse(localStorage.getItem(itemName));
  }
  return {};
}

export function setLocalStorageItem(itemName, item) {
  return localStorage.setItem(itemName, JSON.stringify(item));
}
