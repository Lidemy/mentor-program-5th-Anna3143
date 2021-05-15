function compare(a, b, p) {
  if (a === b) return "DRAW"

  if (p == -1) {
    let temp = a
    a = b
    b = temp
  }

  const lengthA = a.length
  const lengthB = b.length

  if (lengthA != lengthB) {
      return lengthA > lengthB ? "A" : "B"
  }
  return a > b ? 'A' : 'B'
}

