/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigInteger;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadopcionsistema.findAll", query = "SELECT s FROM Seguridadopcionsistema s")})
public class Seguridadopcionsistema implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    private Long id;
    @Basic(optional = false)
    private int estado;
    private String icon;
    @Column(name = "ID_PADRE")
    private BigInteger idPadre;
    @Basic(optional = false)
    @Column(name = "IS_MENU")
    private int isMenu;
    @Basic(optional = false)
    private int nivel;
    @Basic(optional = false)
    private String nombre;
    @Basic(optional = false)
    private String orden;
    private String pagina;
    @Basic(optional = false)
    @Column(name = "TIPO_MENU")
    private int tipoMenu;
    @Basic(optional = false)
    @Column(name = "TIPO_URL")
    private int tipoUrl;

    public Seguridadopcionsistema() {
    }

    public Seguridadopcionsistema(Long id) {
        this.id = id;
    }

    public Seguridadopcionsistema(Long id, int estado, int isMenu, int nivel, String nombre, String orden, int tipoMenu, int tipoUrl) {
        this.id = id;
        this.estado = estado;
        this.isMenu = isMenu;
        this.nivel = nivel;
        this.nombre = nombre;
        this.orden = orden;
        this.tipoMenu = tipoMenu;
        this.tipoUrl = tipoUrl;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public int getEstado() {
        return estado;
    }

    public void setEstado(int estado) {
        this.estado = estado;
    }

    public String getIcon() {
        return icon;
    }

    public void setIcon(String icon) {
        this.icon = icon;
    }

    public BigInteger getIdPadre() {
        return idPadre;
    }

    public void setIdPadre(BigInteger idPadre) {
        this.idPadre = idPadre;
    }

    public int getIsMenu() {
        return isMenu;
    }

    public void setIsMenu(int isMenu) {
        this.isMenu = isMenu;
    }

    public int getNivel() {
        return nivel;
    }

    public void setNivel(int nivel) {
        this.nivel = nivel;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getOrden() {
        return orden;
    }

    public void setOrden(String orden) {
        this.orden = orden;
    }

    public String getPagina() {
        return pagina;
    }

    public void setPagina(String pagina) {
        this.pagina = pagina;
    }

    public int getTipoMenu() {
        return tipoMenu;
    }

    public void setTipoMenu(int tipoMenu) {
        this.tipoMenu = tipoMenu;
    }

    public int getTipoUrl() {
        return tipoUrl;
    }

    public void setTipoUrl(int tipoUrl) {
        this.tipoUrl = tipoUrl;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadopcionsistema)) {
            return false;
        }
        Seguridadopcionsistema other = (Seguridadopcionsistema) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadopcionsistema[ id=" + id + " ]";
    }
    
}
